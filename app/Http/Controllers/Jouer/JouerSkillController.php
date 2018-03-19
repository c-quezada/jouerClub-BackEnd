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

    public function addSkill(Jouer $jouer, Skill $skills)
    {
    	$jouer->skills()->attach($skills);
    	$jouer->save();
    	return $this->showOne($jouer);

   

    }

}
