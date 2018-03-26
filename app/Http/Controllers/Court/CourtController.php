<?php

namespace App\Http\Controllers\Court;

use App\Court;
use App\SportField;
use Illuminate\Http\Request;
use App\Http\Requests\CourtRequest;
use App\Transformers\CourtTransformer;
use App\Http\Controllers\ApiController;

class CourtController extends ApiController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('transform.imput:' . CourtTransformer::class)->only(['store', 'update']);
    }

    public function index()
    {
        $courts = Court::all();
        return $this->showAll($courts);
    }

  public function store(CourtRequest $request)
    {
        $fields                   = $request->all();
        $fields['name']           = ucwords($request->name);     
        $fields['status']         = $request->status;
        $fields['sport_field_id'] = $request->sport_field_id;

        if (SportField::findOrFail($request->sport_field_id)) {
            $court = Court::create($fields); 
            return $this->showOne($court, 201);
        }
    }


    public function show(Court $court)
    {
        return $this->showOne($court);        
    }

    public function update(CourtRequest $request, Court $court)
    {
        if ($request->has('name')) {
            $court->name = $request->name;
        }

        if ($request->has('status')) {
            $court->status = $request->status;
        }

        if (!$court->isDirty()) {
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar', 422);
        }

        $court->save();
        return $this->showOne($court);
    }

    public function destroy(Court $court) //court seria una inyeccion de dependencias, con esto nos ahorramos codear: $court = findOrFail($id);
    {
        $court->delete();
        return $this->showOne($court);
    }
}
