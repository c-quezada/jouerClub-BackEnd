<?php

namespace App\Http\Controllers\Jouer;

use App\User;
use App\Jouer;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class JouerController extends ApiController
{

    public function __construct()
    {
        $this->middleware('client.credentials')->only(['index', 'show']);
        $this->middleware('auth:api')->except(['index', 'show']);
        $this->middleware('transform.input:' . MeetingTransformer::class)->only(['store', 'update']);
    }

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
