<?php

namespace App\Http\Controllers\Court;

use App\Court;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class CourtBranchesController extends ApiController
{
    public function __construct()
    {
      parent::__construct();
    }

    public function index(Court $court)
    {
        $branches = $court->branches;
        return $this->showAll($branches);
    }
}
