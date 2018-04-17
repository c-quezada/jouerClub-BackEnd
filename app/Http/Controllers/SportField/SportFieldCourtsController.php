<?php

namespace App\Http\Controllers\SportField;

use App\SportField;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class SportFieldCourtsController extends ApiController
{
	public function __construct()
    {
        $this->middleware('client.credentials')->only(['index']);
        $this->middleware('auth:api')->only(['index']);
    } 
    
    public function index(SportField $sportfield)
    {
        $courts = $sportfield->courts;
        return $this->showAll($courts);
    }
}
