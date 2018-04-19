<?php

namespace App\Http\Controllers\Jouer;

use App\Jouer;
use App\Meeting;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
        $flag=1;
        $jouer_matches      = $jouer->meetings()->get();
        $current_date_begin = Carbon::parse($meetings->time_begin);
        $current_date_end   = Carbon::parse($meetings->time_end);

        if (count($jouer_matches) > 0) {
            foreach ($jouer_matches as $match) {

                $match_date_begin   = Carbon::parse($match['time_begin']);
                $match_date_end     = Carbon::parse($match['time_end']);

              if ($current_date_begin >= $match_date_begin && $current_date_begin <= $match_date_end ||
                $current_date_end >= $match_date_begin && $current_date_end <= $match_date_end) {
                    $flag=0;
                    return $this->errorResponse('No es posible agendar el encuentro, procura que el horario no coincida con otro encuentro.', 400);
              }

            }

        } else {
            $jouer->meetings()->attach(array($meetings->id));
            return $this->showAll($jouer->meetings()->get());
        }
        if($flag==1){
            if ($current_date_begin <= Carbon::now()->subMinute(1)) {
              return $this->errorResponse("No es posible unirte este encuentro, ya que se encuentra en curso o bien ya ha finalizado.", 403);
            }
            $jouer->meetings()->attach(array($meetings->id));
            return $this->showAll($jouer->meetings()->get());
        }
    }

    public function removeMeeting(Jouer $jouer, Meeting $meetings)
    {
            $jouer->meetings()->detach(array($meetings->id));
            return $this->showMessage('Ya no estas dentro de este encuentro.', 200);
    }
}
