<?php

namespace App\Http\Controllers\Workshop;

use App\Workshop;
use Illuminate\Http\Request;
use App\Http\Requests\WorkshopRequest;
use App\Http\Controllers\ApiController;
use App\Transformers\WorkshopTransformer;

class WorkshopController extends ApiController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('transform.imput: ' . WorkshopTransformer::class)->only(['store', 'update']);
    }

    public function index()
    {
        $workshops = Workshop::all();
        return $this->showAll($workshops);
    }

    public function store(WorkshopRequest $request)
    {
        $fields                = $request->all();
        $fields['name']        = strtoupper($request->name);
        $fields['description'] = strtolower($request->lastname);
        $fields['time_begin']  = $request->time_begin;     
        $fields['time_end']    = $request->time_end;
        $fields['status']      = $request->status;

        if (Coach::findOrFail($request->coach_id)) {
            $workshop = Workshop::create($fields); 
            return $this->showOne($workshop, 201);
        }

        $workshop = Workshop::create($fields);
        return $this->showOne($workshop, 201);
    }

    public function show(Workshop $workshop)
    {
        return $this->showOne($workshop);        
    }

    public function update(WorkshopRequest $request, Workshop $workshop)
    {      
        if ($request->has('name')) {
            $workshop->name = $request->name;
        }

        if ($request->has('description')) {
            $workshop->description = $request->description;
        }

        if ($request->has('lat')) {
            $workshop->lat = $request->lat;
        }

        if ($request->has('lng')) {
            $workshop->lng = $request->lng;
        }

        if ($request->has('time_begin')) {
            $workshop->time_begin = $request->time_begin;
        }

        if ($request->has('time_end')) {
            $workshop->time_end = $request->time_end;
        }

        if ($request->has('coach_id')) {
            $workshop->coach_id;
        }


        if ($request->has('status')) {
            $workshop->status = $request->status;
        }

        if (!$workshop->isDirty()) { 
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar', 422);
        }

        $workshop->save();
        return $this->showOne($workshop);
    }

    public function destroy(Workshop $workshop) //workshop seria una inyeccion de dependencias, con esto nos ahorramos codear: $workshop = findOrFail($id);
    {
        $workshop->delete();
        return $this->showOne($workshop);
    }
}