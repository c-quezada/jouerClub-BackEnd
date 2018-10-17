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
        $flag = 1;
        $jouer_workshops      = $jouer->workshops()->get();
        $current_date_begin = Carbon::parse($workshops->time_begin);
        $current_date_end   = Carbon::parse($workshops->time_end);

        if (count($jouer_workshops) > 0) {
            foreach ($jouer_workshops as $workshop) {

                $workshop_date_begin   = Carbon::parse($workshop['time_begin']);
                $workshop_date_end     = Carbon::parse($workshop['time_end']);

                if ($current_date_begin >= $workshop_date_begin && $current_date_begin <= $workshop_date_end ||
                $current_date_end >= $workshop_date_begin && $current_date_end <= $workshop_date_end) {
                    $flag = 0;
                    return $this->errorResponse('No es posible agendar el taller, procura que el horario no coincida con otro.', 400);
                }

            }

        } else {
            $jouer->workshops()->attach(array($workshops->id));
            return $this->showAll($jouer->workshops()->get());
        }
        if($flag == 1){
            if ($current_date_begin <= Carbon::now()->subMinute(1)) {
                return $this->errorResponse("No es posible unirte a este taller, ya que se encuentra en curso o bien ya ha finalizado.", 403);
            }
                $jouer->workshops()->attach(array($workshops->id));
                return $this->showAll($jouer->workshops()->get());
        }
    }

    public function removeWorkshop(Jouer $jouer, Workshop $workshops)
    {
        $jouer->workshops()->detach(array($workshops->id));
        return $this->showMessage('Haz sido retirado del taller.', 200);
    }    
}
