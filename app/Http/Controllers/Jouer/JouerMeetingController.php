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
        $jouer_matches     = $jouer->meetings()->get();
        $jouer_match_start = $jouer->meetings()->get()->pluck('time_begin');
        $jouer_match_end   = $jouer->meetings()->get()->pluck('time_end');

        $current_match       = $meetings->id;
        $current_match_start = $meetings->time_begin;
        $current_match_end   = $meetings->time_end;

        $current_match = DB::table('meetings')
                    ->whereNotBetween('time_begin', ['2018-02-14 13:00:00', '2018-02-14 15:00:00'])
                    ->get();

        var_dump($current_match); die();

        /*

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

    public function removeMeeting(Jouer $jouer, Meeting $meetings)
    {
            $jouer->meetings()->detach(array($meetings->id));
            return $this->showMessage('Ya no estas dentro de este encuentro.', 200);
    }
}
