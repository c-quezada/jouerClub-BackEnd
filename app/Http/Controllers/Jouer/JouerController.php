<?php

namespace App\Http\Controllers\Jouer;

use App\User;
use App\Jouer;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class JouerController extends ApiController
{
    public function index()
    {
        $jouers = Jouer::has('skills')->get();
        return $this->showAll($jouers);
    }

    public function show(Jouer $jouer)//Inyeccion de instancias a traves de global scope /App\Scopes\JouerScope
    {
        return $this->showOne($jouer);
    }

    public function addSkill(Jouer $jouer, Request $request)
    {
            $jouer->skills()->attach(array($request->skills));
            $jouer->skills()->wherePivot('skill_id', '=', 1)->detach();
            return $this->showAll($jouer->skills);       
    }
}