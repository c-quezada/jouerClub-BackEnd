<?php

namespace App\Http\Controllers\Sport;

use App\Sport;
use Illuminate\Http\Request;
use App\Http\Requests\SportRequest;
use App\Http\Controllers\ApiController;

class SportController extends ApiController
{
    public function index()
    {
        $sports = Sport::all();
        return $this->showAll($sports);
    }

    public function store(SportRequest $request)
    {
       //
    }

    public function show(Sport $sport)
    {
        return $this->showOne($sport);        
    }

    public function update(SportRequest $request, Sport $sport)
    {
        if ($request->has('name')) {
            $sport->name = $request->name;
        }

        if ($request->has('description')) {
            $sport->description = $request->description;
        }

        if (!$sport->isDirty()) {
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar', 422);
        }

        $sport->save();
        return $this->showOne($sport);
    }

    public function destroy(Sport $sport)
    {
    	$sport->delete();
        return $this->showOne($sport);
    }
}



