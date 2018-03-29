<?php

namespace App\Http\Controllers\Jouer;

use App\Jouer;
use App\User;
use App\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class JouerSkillController extends ApiController
{

    public function index(Jouer $jouer)
    {
        $skills = $jouer->skills;
        return $this->showAll($skills);
    }

    public function addSkill(Jouer $jouer, Request $request)
    {
            $jouer->skills()->attach(array($request->skills));
            $jouer->skills()->wherePivot('skill_id', '=', 1)->detach();
            return $this->showAll($jouer->skills);       
    }

    public function removeSkill(Jouer $jouer, Request $request)
    {
            $jouer->skills()->detach(array($request->skills));
            return $this->showAll($jouer->skills);       
    }
}
