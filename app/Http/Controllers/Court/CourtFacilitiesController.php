<?php

namespace App\Http\Controllers\Court;

use App\Court;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class CourtFacilitiesController extends ApiController
{
	public function __construct()
    {
        $this->middleware('client.credentials')->only(['index']);
        $this->middleware('auth:api')->only(['index']);
    }
    public function index(Court $court)
    {
        $facilities = $court->facilities;
        return $this->showAll($facilities);
    }
}
