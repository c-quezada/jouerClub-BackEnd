<?php

namespace App\Http\Controllers\Jouer;

use App\Jouer;
use App\User;
use App\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class JouerSkillController extends ApiController
{
    public function __construct()
    {
      parent::__construct();
    }
    
    public function index(Jouer $jouer)
    {
        $skills = $jouer->skills;
        return $this->showAll($skills);
    }

    public function addSkill(Jouer $jouer, Skill $skills)
    {
            $jouer->skills()->attach(array($skills->id));
            $jouer->skills()->wherePivot('skill_id', '=', 1)->detach();
            return $this->showMessage('La skill a sido agregado satisfactoriamente.', 201);
    }

    public function removeSkill(Jouer $jouer, Skill $skills)
    {
        $jouer->skills()->detach(array($skills->id));
        return $this->showMessage('La skill a sido removida satisfactoriamente.', 200);
    }
}

