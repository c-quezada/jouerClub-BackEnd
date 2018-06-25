<?php

namespace App\Http\Controllers\SportField;

use App\SportField;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class SportFieldServicesController extends ApiController
{
    public function __construct()
    {
      parent::__construct();
    }

    public function index(SportField $sportfield)
    {
        $services = $sportfield->services;
        return $this->showAll($services);
    }

    public function addService(SportField $sportfield, Service $service)
    {
        $sportfield->services()->attach(array($service->id));
        return $this->showMessage('El servicio a sido agregado satisfactoriamente.', 201);
    }

    public function removeSkill(SportField $sportfield, Service $service)
    {
        $sportfield->services()->detach(array($service->id));
        return $this->showMessage('El servicio a sido removida satisfactoriamente.', 200);
    }
}
