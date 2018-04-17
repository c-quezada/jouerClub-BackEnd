<?php

namespace App\Http\Controllers\Facility;

use App\Facility;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class FacilityMaintenanceController extends ApiController
{
    public function __construct()
    {
      parent::__construct();
    }
    
    public function index(Facility $facility)
    {
        $maintenance = $facility->maintenance;
        return $this->showAll($maintenance);
    }

}
