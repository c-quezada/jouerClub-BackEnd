<?php

namespace App\Http\Controllers\Jouer;

use App\Jouer;
use App\Workshop;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\Workshop\WorkshopController;

class JouerWorkshopController extends ApiController
{
    public function __construct()
    {
      parent::__construct();
    }
    
    public function index(Jouer $jouer)
    {
        $workshops = $jouer->workshops;
        return $this->showAll($workshops);
    }

    public function addWorkshop(Jouer $jouer, Workshop $workshops)
    {
        $jouer->workshops()->attach(array($workshops->id));
        return $this->showMessage('Haz sido ingresado al taller.', 200);
    }

    public function removeWorkshop(Jouer $jouer, Workshop $workshops)
    {
        $jouer->workshops()->detach(array($workshops->id));
        return $this->showMessage('Haz sido retirado del taller.', 200);
    }    
}
