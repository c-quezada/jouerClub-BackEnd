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
			//parent::__construct();
		}
		
    public function store(Court $court, Request $request)
    {    
        $all_meetings = $court->meetings()->get();

        if (!isset($request->date)) {
            
            $current_date_begin = Carbon::today()->addHours(7);
            $current_date_end   = Carbon::today()->addHours(23);

            if (count($all_meetings) > 0) {
                $collection = collect();

                foreach ($all_meetings as $match) {
                    $match_date_begin = Carbon::parse($match['time_begin']);
                    if ($match_date_begin >= $current_date_begin && $match_date_begin <= $current_date_end) {
                        $collection->push($match);
                    }
                }
                return $this->showAll($collection);
                
            } 

        } else {

            $custom_date   = Carbon::parse($request->date);
            
            echo
            $date_begin    = $custom_date->addHours(7) . " " .
            $date_end      = $custom_date->addHours(23)
            ;

            if (count($all_meetings) > 0) {
                $collection = collect();

                foreach ($all_meetings as $match) {
                    $match_date_begin = Carbon::parse($match['time_begin']);
                    if ($match_date_begin >= $date_begin && $match_date_begin <= $date_end) {
                        $collection->push($match);
                    }
                }

                return $this->showAll($collection);
                
            }

        }
    }
}