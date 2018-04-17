<?php

namespace App\Http\Controllers\Coach;

use App\Coach;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class CoachWorkshopsController extends ApiController
{
	public function __construct()
    {
        $this->middleware('client.credentials')->only(['index']);
        $this->middleware('auth:api')->only(['index']);
    }

    public function index(Coach $coach)
    {
        $workshops = $coach->workshops;
        return $this->showAll($workshops);
    }
}
