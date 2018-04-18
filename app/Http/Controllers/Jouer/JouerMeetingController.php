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
        $jouer_match_start = $jouer->meetings()->get()->pluck('time_begin');
        $jouer_match_end = $jouer->meetings()->get()->pluck('time_end');

        var_dump($jouer_match_start); die();

        /*
        $current_match = $meetings->time_begin;

        foreach ($jouer_matches_time as $time) {
            if ($time !== $current_match) {
              echo "El partido $time No es a la misma hora que el actual: $current_match " . "\n" ;
            }
        }*/


        //var_dump($current_match); die();
        //var_dump($matches);
        //$date = $meetings->time_begin;
        //$jouer->meetings()->attach(array($meetings->id));
        //return $this->showAll($matches);
    }

    public function removeMeeting(Jouer $jouer, Request $request)
    {
            $jouer->meetings()->detach(array($request->meetings));
            return $this->showAll($jouer->meetings);
    }
}
