<?php

namespace App\Http\Controllers\Jouer;

use App\Jouer;
use App\Meeting;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

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
        $jouer_matches = $jouer->meetings()->get();

        foreach ($jouer_matches as $match) {
          if ($meetings->time_begin >= $match->time_begin && $meetings->time_end <= $match->time_end) {
            return $this->errorResponse('No es posible agendar el encuentro, procura que el horario no coincida con otro encuentro.', 400);
          } else {
            $jouer->meetings()->attach(array($meetings->id));
            return $this->showAll($jouer->meetings()->get());
          }
        }
    }

    public function removeMeeting(Jouer $jouer, Request $request)
    {
            $jouer->meetings()->detach(array($request->meetings));
            return $this->showAll($jouer->meetings);
    }
}
