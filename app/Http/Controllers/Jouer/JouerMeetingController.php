<?php

namespace App\Http\Controllers\Jouer;

use App\Jouer;
use App\Meeting;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class JouerMeetingController extends ApiController
{

    public function index(Jouer $jouer)
    {
        $meetings = $jouer->meetings;
        return $this->showAll($meetings);
    }

    public function addMeeting(Jouer $jouer, Request $request)
    {
            $jouer->meetings()->attach(array($request->meetings));
            return $this->showAll($jouer->meetings);       
    }

    public function removeMeeting(Jouer $jouer, Request $request)
    {
            $jouer->meetings()->detach(array($request->meetings));
            return $this->showAll($jouer->meetings);       
    }
}
