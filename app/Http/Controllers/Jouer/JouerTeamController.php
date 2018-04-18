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
      parent::__construct();
    }
    
    public function index(Jouer $jouer)
    {
        $teams = $jouer->teams;
        return $this->showAll($teams);
    }

    public function addTeam(Jouer $jouer, Team $teams)
    {
        $jouer->teams()->attach(array($teams->id));
        return $this->showMessage('Haz sido ingresado al equipo.', 200);
    }

    public function removeTeam(Jouer $jouer, Team $teams)
    {
        $jouer->teams()->detach(array($teams->id));
        return $this->showMessage('Haz sido retirado del equipo.', 200);
    }

}
