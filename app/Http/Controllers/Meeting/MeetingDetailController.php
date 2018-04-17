<?php

namespace App\Http\Controllers\Meeting;

use App\Jouer;
use App\Meeting;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class MeetingDetailController extends ApiController
{
	public function __construct()
    {
        $this->middleware('client.credentials')->only(['index']);
        $this->middleware('auth:api')->only(['index']);
    }

    public function index(Meeting $meeting)
    {
        $jouers = $meeting->jouers;
        return $this->showAll($jouers);
    }

}
