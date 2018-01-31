<?php

namespace App\Http\Controllers\SportField;

use App\SportField;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class SportFieldCourtsController extends ApiController
{
    public function index(SportField $sportfield)
    {
        $courts = $sportfield->courts;
        return $this->showAll($courts);
    }
}
