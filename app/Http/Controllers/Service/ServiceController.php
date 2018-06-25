<?php

namespace App\Http\Controllers\Service;

use App\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\BranchRequest;
use App\Http\Controllers\ApiController;
use App\Transformers\ServiceTransformer;

class ServiceController extends ApiController
{
    public function __construct()
    {
        $this->middleware('client.credentials')->only(['index', 'show']);
        $this->middleware('auth:api')->except(['index', 'show']);
        $this->middleware('transform.input:' . ServiceTransformer::class)->only(['store', 'update']);
    }

    public function index()
    {
        $services = Service::all();
        return $this->showAll($services);
    }

    public function store(BranchRequest $request)
    {
        $fields                   = $request->all();
        $fields['name']           = ucwords($request->name);

        $today = Carbon::now()->toDateTimeString();
        $change_date = str_replace(" ", "-", $today);
        $name = $change_date."-service-".str_random(10); 
    
        if (empty($request->avatar)) {
            //set default image 
            $fields['avatar'] = "services/service.png"; 
        } else {
            $fields['avatar']  = $request->avatar->storeAs('services', $name);
        }

        $service = Service::create($fields);
        return $this->showOne($service, 201);    
    }

    public function show(Service $service)
    {
        return $this->showOne($service);
    }

    public function update(Request $request, Service $service)
    {
        if ($request->has('name')) {
            $service->name = $request->name;
        }

        if (!$service->isDirty()) {
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar', 422);
        }

        $service->save();
        return $this->showOne($service);
    }

    public function destroy(Service $service)
    {
    	$service->delete();
        return $this->showOne($service);
    }
}
