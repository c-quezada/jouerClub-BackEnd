<?php

namespace App\Http\Controllers\Facility;

use App\Facility;
use Illuminate\Http\Request;
use App\Http\Requests\FacilityRequest;
use App\Http\Controllers\ApiController;
use App\Transformers\FacilityTransformer;

class FacilityController extends ApiController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('transform.input:' . FacilityTransformer::class)->only(['store', 'update']);
    }

    public function index()
    {
        $facilities = Facility::all();
        return $this->showAll($facilities);
    }

    public function store(FacilityRequest $request)
    {
        $fields                  = $request->all();
        $fields['name']          = ucwords($request->name);
        $fields['brand']         = ucwords($request->brand);
        $fields['purchased_at']  = ucwords($request->purchased_at);
        $fields['court_id']      = ucwords($request->court_id);
        
        //dd($fields); die();

        $facility = Facility::create($fields);
        return $this->showOne($facility, 201);  
    }

    public function show(Facility $facility)
    {
        return $this->showOne($facility, 201);
    }

    public function update(Request $request, Facility $facility)
    {
        if ($request->has('name')) {
            $facility->name = $request->name;
        }

        if ($request->has('brand')) {
            $facility->brand = $request->brand;
        }

        if ($request->has('purchased_at')) {
            $facility->purchased_at = $request->purchased_at;
        }

        if (!$facility->isDirty()) { //verifica si el usuario no se modificó
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar', 422);
        }

        $facility->save();
        return $this->showOne($facility);
    
    }

    public function destroy(Facility $facility)
    {
        $facility->delete();
        $this->ShowOne($facility);
    }
}
