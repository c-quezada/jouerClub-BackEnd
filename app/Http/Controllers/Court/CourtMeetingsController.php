<?php

namespace App\Http\Controllers\Court;

use App\Court;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class CourtMeetingsController extends ApiController
{
    public function index(Court $court)
    {
        $meetings = $court->meetings;
        return $this->showAll($meetings);
    }
}
