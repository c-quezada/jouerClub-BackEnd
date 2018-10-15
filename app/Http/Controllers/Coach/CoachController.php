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

    public function show(Coach $coach)//Inyeccion de instancia a traves de global 
    {
        return $this->showOne($coach);
    }
}
