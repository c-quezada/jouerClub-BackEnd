<?php

namespace App\Http\Controllers\Jouer;

use App\Jouer;
use App\Workshop;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class JouerWorkshopController extends ApiController
{

    public function index(Jouer $jouer)
    {
        $workshops = $jouer->workshops;
        return $this->showAll($workshops);
    }

    public function addWorkshop(Jouer $jouer, Request $request)
    {
            $jouer->workshops()->attach(array($request->workshops));
            return $this->showAll($jouer->workshops);       
    }

    public function removeWorkshop(Jouer $jouer, Request $request)
    {
            $jouer->workshops()->detach(array($request->workshops));
            return $this->showAll($jouer->workshops);       
    }
}
