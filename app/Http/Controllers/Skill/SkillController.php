<?php

namespace App\Http\Controllers\Skill;

use App\Skill;
use App\Branch;
use Illuminate\Http\Request;
use App\Http\Requests\SkillRequest;
use App\Http\Controllers\ApiController;
use App\Transformers\SkillTransformer;

class SkillController extends ApiController
{
    public function __construct()
    {
        $this->middleware('client.credentials')->only(['index', 'show']);
        $this->middleware('auth:api')->except(['index', 'show']);
        $this->middleware('transform.input:' . SkillTransformer::class)->only(['store', 'update']);
    }

    public function index()
    {
        $skills = Skill::all();
        return $this->showAll($skills);
    }

    public function store(SkillRequest $request)
    {
        $fields                   = $request->all();
        $fields['name']           = ucwords($request->name);     

        if (Branch::findOrFail($request->branch_id)) {
            $skill = Skill::create($fields); 
            return $this->showOne($skill, 201);  
        }
    }

    public function show(Skill $skill)
    {
        return $this->showOne($skill);        
    }

    public function update(Request $request, Skill $skill)
    {
        if ($request->has('name')) {
            $skill->name = $request->name;
        }

        if (!$skill->isDirty()) {
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar', 422);
        }

        $skill->save();
        return $this->showOne($skill);
    }

    public function destroy(Skill $skill)
    {
    	$skill->delete();
        return $this->showOne($skill);
    }
}



