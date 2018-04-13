<?php

namespace App\Http\Controllers\SportField;

use App\SportField;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class SportFieldMeetingsController extends ApiController
{
    public function index(SportField $sportfield)
    {
        $meetings = $sportfield->courts()
                               ->whereHas('meetings')
                               ->with('meetings')
                               ->get()
                               ->pluck('meetings')
                               ->collapse();

        return $this->showAll($meetings);
    }
}
