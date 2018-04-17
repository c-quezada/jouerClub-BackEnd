<?php

namespace App\Http\Controllers\Coach;

use App\Coach;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class CoachController extends ApiController
{

    public function __construct()
    {
      parent::__construct();
    }

    public function index()
    {
        $coaches = Coach::has('workshops')->get();
        return $this->showAll($coaches);
    }

    public function show(Coach $coach)//Inyeccion de dependencias a traves de global scope /App\Scopes\CluberScope
    {
        return $this->showOne($coach);
    }
}
