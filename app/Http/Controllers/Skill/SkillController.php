<?php

namespace App\Http\Controllers\Skill;

use App\Skill;
use Illuminate\Http\Request;
use App\Http\Requests\SkillRequest;
use App\Http\Controllers\ApiController;

class SkillController extends ApiController
{
    public function index()
    {
        $skills = Skill::all();
        return $this->showAll($skills);
    }

    public function store(SkillRequest $request)
    {
        $fields                  = $request->all();
        $fields['name']          = ucwords($request->name);     
        $fields['description']   = $request->description;

        $skill = Skill::create($fields); 
        return $this->showOne($skill, 201);
       
    }

    public function show(Skill $skill)
    {
        return $this->showOne($skill);        
    }

    public function update(SkillRequest $request, Skill $skill)
    {
        if ($request->has('name')) {
            $skill->name = $request->name;
        }

        if ($request->has('description')) {
            $skill->description = $request->description;
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



