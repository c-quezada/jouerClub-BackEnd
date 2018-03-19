<?php

namespace App\Http\Controllers\Branch;

use App\Branch;
use App\Sport;
use Illuminate\Http\Request;
use App\Http\Requests\BranchRequest;
use App\Http\Controllers\ApiController;

class BranchController extends ApiController
{
    public function index()
    {
        $branches = Branch::all();
        return $this->showAll($branches);
    }

    public function store(BranchRequest $request)
    {
        $fields                   = $request->all();
        $fields['name']           = ucwords($request->name);     
        $fields['sport_id']       = $request->sport_id;

        if (Sport::findOrFail($request->sport_id)) {
            $branch = Branch::create($fields); 
            return $this->showOne($branch, 201);
        }    }

    public function show(Branch $branch)
    {
        return $this->showOne($branch);        
    }

    public function update(BranchRequest $request, Branch $branch)
    {
        if ($request->has('name')) {
            $branch->name = $request->name;
        }

        if (!$branch->isDirty()) {
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar', 422);
        }

        $branch->save();
        return $this->showOne($branch);
    }

    public function destroy(Branch $branch)
    {
    	$branch->delete();
        return $this->showOne($branch);
    }
}



