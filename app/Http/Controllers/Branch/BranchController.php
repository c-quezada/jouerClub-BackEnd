<?php

namespace App\Http\Controllers\Branch;

use App\Sport;
use App\Branch;
use Illuminate\Http\Request;
use App\Http\Requests\BranchRequest;
use App\Http\Controllers\ApiController;
use App\Transformers\BranchTransformer;

class BranchController extends ApiController
{
    public function __construct()
    {
        $this->middleware('client.credentials')->only(['index', 'show']);
        $this->middleware('auth:api')->except(['index', 'show']);
        $this->middleware('transform.input:' . BranchTransformer::class)->only(['store', 'update']);
    }

    public function index()
    {
        $branches = Branch::all();
        return $this->showAll($branches);
    }

    public function store(BranchRequest $request)
    {
        $fields                   = $request->all();
        $fields['name']           = ucwords($request->name);

        if (Sport::findOrFail($request->sport_id)) {
            $branch = Branch::create($fields);
            return $this->showOne($branch, 201);
        }    
    }

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
