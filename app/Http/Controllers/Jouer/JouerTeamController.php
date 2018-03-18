<?php

namespace App\Http\Controllers\Jouer;

use App\Jouer;
use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class JouerTeamController extends ApiController
{

    public function index(Jouer $jouer)
    {
        $teams = $jouer->teams;
        return $this->showAll($teams);
    }

}
