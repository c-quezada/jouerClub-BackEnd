<?php

namespace App\Http\Controllers\Branch;
namespace App\Http\Controllers\Sport;

use App\Branch;
use App\Sport;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class SportBranchController extends ApiController
{
    public function __construct()
    {
      parent::__construct();
    }

    public function index(Sport $sport)
    {
        $branches = $sport->branches;
        return $this->showAll($branches);
    }
}
