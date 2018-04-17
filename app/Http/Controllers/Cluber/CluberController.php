<?php

namespace App\Http\Controllers\Cluber;

use App\Cluber;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class CluberController extends ApiController
{
	public function __construct()
    {
        $this->middleware('client.credentials')->only(['index', 'show']);
        $this->middleware('auth:api')->only(['index', 'show']);
    } 
    
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
