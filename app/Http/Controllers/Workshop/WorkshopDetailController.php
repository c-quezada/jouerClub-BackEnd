<?php

namespace App\Http\Controllers\Workshop;

use App\Jouer;
use App\Workshop;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class WorkshopDetailController extends ApiController
{
	public function __construct()
    {
        $this->middleware('client.credentials')->only(['index']);
        $this->middleware('auth:api')->only(['index']);
    }

    public function index(Workshop $workshop)
    {
        $jouers = $workshop->jouers;
        return $this->showAll($jouers);
    }

}
