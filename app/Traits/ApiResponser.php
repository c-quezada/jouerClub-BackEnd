<?php
namespace App\Traits;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\LengthAwarePaginator;
trait ApiResponser
{
	private function successResponse($data, $code)
	{
		return response()->json(['data' => $data], $code);
	}

	protected function errorResponse($message, $code)
	{
		return response()->json(['error' => $message, 'code' => $code], $code);
	}

	protected function showAll(Collection $collection, $code = 200)
	{
		if ($collection->isEmpty()) {
			return $this->errorResponse('No hay resultados para estos recursos', $code);
		}
		
		//$collection = $this->filterData($collection);
		$collection = $this->sortData($collection);
		$collection = $this->paginate($collection);
		
		$collection = $this->cacheResponse($collection);
		return $this->successResponse($collection, $code);
	}

	protected function showOne(Model $instance, $code = 200)
	{
		return $this->successResponse($instance, $code);
	}
	
	protected function showMessage($message, $code = 200)
	{
		return $this->successResponse(['data' => $message], $code);
	}
	
	protected function filterData(Collection $collection)
	{
		$queryParams = request()->query();

		foreach ($queryParams as $key => $value) {
			if (isset($value)) {
				$collection = $collection->where($key, $value);
			}
		}
		return $collection;
	}
	
	protected function sortData(Collection $collection)
	{
		if (request()->has('by')) {
			$attribute = request()->by;
			$collection = $collection->sortBy->{$attribute};
		}
		return $collection;
	}
	
	protected function paginate(Collection $collection)
	{
		$rules = [
			'amount' => 'integer|min:2|max:50'
		];
		Validator::validate(request()->all(), $rules);
		$page = LengthAwarePaginator::resolveCurrentPage();
		$perPage = 15;
		if (request()->has('amount')) {
			$perPage = (int) request()->amount;
		}
		$results = $collection->slice(($page - 1) * $perPage, $perPage)->values();
		$paginated = new LengthAwarePaginator($results, $collection->count(), $perPage, $page, [
			'path' => LengthAwarePaginator::resolveCurrentPath(),
		]);
		$paginated->appends(request()->all());
		return $paginated;
	}

	protected function cacheResponse($data)
	{
		$url = request()->url();
		$queryParams = request()->query(); //parametros de la url
		ksort($queryParams); //ordena los parametros 
		$queryString = http_build_query($queryParams); //recibe el array de los parametros de la url
		$fullUrl = "{$url}?{$queryString}"; //se contrulle la url ordenada
		return Cache::remember($fullUrl, 30/60, function() use($data) {
			return $data;
		}); //1er parametro: para identificar una peticion de otra, 2do: tiempo que se va a establecer el cache de la respuesta, 3er: retornar datos del cache 
	}
}