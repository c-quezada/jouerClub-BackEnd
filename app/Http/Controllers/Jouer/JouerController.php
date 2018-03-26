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

}