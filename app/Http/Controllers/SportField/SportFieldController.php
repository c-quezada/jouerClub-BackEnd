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


    public function create()
    {
        //
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


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}