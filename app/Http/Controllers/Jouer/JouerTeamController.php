<?php

namespace App\Http\Controllers\Jouer;

use App\Jouer;
use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class JouerTeamController extends ApiController
{
    public function __construct()
    {
      $this->middleware('auth:api')->only(['index', 'addTeam', 'removeTeam']);
    }

    public function index(Jouer $jouer)
    {
        $teams = $jouer->teams;
        return $this->showAll($teams);
    }

    public function addTeam(Jouer $jouer, Request $request)
    {
            $jouer->teams()->attach(array($request->teams));
            return $this->showAll($jouer->teams);       
    }

    public function removeTeam(Jouer $jouer, Request $request)
    {
            $jouer->teams()->detach(array($request->teams));
            return $this->showAll($jouer->teams);       
    }

}
