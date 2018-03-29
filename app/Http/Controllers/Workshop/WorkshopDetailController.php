<?php

namespace App\Http\Controllers\Workshop;

use App\Jouer;
use App\Workshop;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class WorkshopDetailController extends ApiController
{

    public function index(Workshop $workshop)
    {
        $jouers = $workshop->jouers;
        return $this->showAll($jouers);
    }

}
