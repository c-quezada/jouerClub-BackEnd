<?php

namespace App\Http\Controllers\Cluber;

use App\Cluber;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class CluberController extends ApiController
{

    public function index()
    {
        $clubers = Cluber::has('sportfields')->get();
        return $this->showAll($clubers);
    }

    public function show(Cluber $cluber)//Inyeccion de dependencias a traves de global scope /App\Scopes\CluberScope
    {
        return $this->showOne($cluber);
    }
}
