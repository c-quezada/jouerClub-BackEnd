<?php

namespace App\Http\Controllers\Court;

use App\Court;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class CourtMeetingsController extends ApiController
{
		public function __construct()
		{
			parent::__construct();
		}
		
    public function store(Court $court, Request $request)
    {    
        $today_message = Carbon::today()->format('l jS \\of F Y');
        $all_meetings = $court->meetings()->get();

        if (!isset($request->date)) {
            
            $current_date_begin = Carbon::today()->addHours(7);
            $current_date_end   = Carbon::today()->addHours(23)->addMinutes(59);
            
            if (count($all_meetings) > 0) {
                $collection = collect();

                foreach ($all_meetings as $match) {
                    $match_date_begin = Carbon::parse($match['time_begin']);
                    if ($match_date_begin >= $current_date_begin && $match_date_begin <= $current_date_end) {
                        $collection->push($match);
                    }
                }
                return $this->showAll($collection);
                
            } else {
                return $this->errorResponse("Hasta el momento, no se han registrado encuentros deportivos para la fecha: {$today_message}", 404);
            }

        } else {

            $day_message  = Carbon::parse($request->date)->format('l jS \\of F Y');

            $date_begin   = Carbon::parse($request->date)->addHours(7);
            
            $date_end     = Carbon::parse($request->date)->addHours(23)->addMinutes(59);

            if (count($all_meetings) > 0) {
                $collection = collect();

                foreach ($all_meetings as $match) {
                    $match_date_begin = Carbon::parse($match['time_begin']);
                    if ($match_date_begin >= $date_begin && $match_date_begin <= $date_end) {
                        $collection->push($match);
                    }
                }

                return $this->showAll($collection);
                
            } else {
                return $this->errorResponse("Hasta el momento, no se han registrado encuentros deportivos para la fecha: {$day_message}", 404);
            }

        }
    }
}