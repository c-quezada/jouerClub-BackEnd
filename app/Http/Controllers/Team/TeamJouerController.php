<?php

namespace App\Http\Controllers\Team;

use App\Jouer;
use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class TeamJouerController extends ApiController
{
	public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(Team $team)
    {
        $jouers = $team->jouers;
        return $this->showAll($jouers);
    }

}
