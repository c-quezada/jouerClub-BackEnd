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
			parent::__construct();
		}
		
    public function index(Meeting $meeting)
    {
        $jouers = $meeting->jouers;
        return $this->showAll($jouers);
    }

}
