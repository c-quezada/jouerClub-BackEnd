<?php

namespace App\Http\Controllers\SportField;

use App\Cluber;
use App\SportField;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Http\Requests\SportFieldRequest;

class SportFieldController extends ApiController
{

    public function index()
    {
        $sportfields = SportField::all();
        return $this->showAll($sportfields);
    }

    public function store(SportFieldRequest $request)
    {
        $fields                = $request->all();
        $fields['name']        = ucwords($request->name);     
        $fields['description'] = strtolower($request->description);
        $fields['address']     = ucwords($request->address);

        if (Cluber::findOrFail($request->cluber_id)) {
            $sportfield = SportField::create($fields); 
            return $this->showOne($sportfield, 201);
        }
    }


    public function show(Sportfield $sportfield)
    {
        return $this->showOne($sportfield);        
    }

    public function update(SportFieldRequest $request, Sportfield $sportfield)
    {
        if ($request->has('name')) {
            $sportfield->name = $request->name;
        }

        if ($request->has('description')) {
            $sportfield->description = $request->description;
        }

        if ($request->has('address')) {
            $sportfield->address = $request->address;
        }
        if ($request->has('lat')) {
            $sportfield->lat = $request->lat;
        }
        if ($request->has('lng')) {
            $sportfield->lng = $request->lng;
        }
        if ($request->has('website')) {
            $sportfield->website = $request->website;
        }
        if ($request->has('facebook')) {
            $sportfield->facebook = $request->facebook;
        }
        if ($request->has('instagram')) {
            $sportfield->instagram = $request->instagram;
        }
        if ($request->has('twitter')) {
            $sportfield->twitter = $request->twitter;
        }

        if ($request->has('time_begin')) {
            $sportfield->time_begin = $request->time_begin;
        }

        if ($request->has('time_end')) {
            $sportfield->time_end = $request->time_end;
        }

        if (!$sportfield->isDirty()) {
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar', 422);
        }

        $sportfield->save();
        return $this->showOne($sportfield);
    }

    public function destroy(Sportfield $sportfield) //sportfield seria una inyeccion de dependencias, con esto nos ahorramos codear: $sportfield = findOrFail($id);
    {
        $sportfield->delete();
        return $this->showOne($sportfield);
    }
}