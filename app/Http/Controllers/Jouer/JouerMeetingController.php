<?php

namespace App\Http\Controllers\Jouer;

use App\Jouer;
use App\Meeting;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\DB;

class JouerMeetingController extends ApiController
{
    public function __construct()
    {
      parent::__construct();
    }

    public function index(Jouer $jouer)
    {
        $meetings = $jouer->meetings;
        return $this->showAll($meetings);
    }

    public function addMeeting(Jouer $jouer, Meeting $meetings)
    {
        $jouer_matches = $jouer->meetings()->get()->pluck(['time_begin', 'time_end']);

        foreach ($jouer_matches as $match) {
          if (strtotime($meetings->time_begin) >= strtotime($match->time_begin) && strtotime($meetings->time_end) <= strtotime($match->time_end)) {
            return $this->errorResponse('No es posible agendar el encuentro, procura que el horario no coincida con otro encuentro.', 400);
          } else {
            $jouer->meetings()->attach(array($meetings->id));
            return $this->showAll($jouer->meetings()->get());
          }
        }
    }

    public function removeMeeting(Jouer $jouer, Meeting $meetings)
    {
            $jouer->meetings()->detach(array($meetings->id));
            return $this->showMessage('Ya no estas dentro de este encuentro.', 200);
    }
}
