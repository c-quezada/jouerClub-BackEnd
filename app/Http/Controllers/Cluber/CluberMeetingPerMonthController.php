<?php

namespace App\Http\Controllers\Cluber;

use App\Cluber;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class CluberMeetingPerMonthController extends ApiController
{

    public function __construct()
    {
      //parent::__construct();
    }

    public function index(Request $request, Cluber $cluber)
    {
        //$fields[] = $request->all();

        $current_month = Carbon::now()->month;

        $courts = $cluber->sportfields()
                         ->whereHas('courts')
                         ->with('courts')
                         ->get()
                         ->pluck('courts')
                         ->collapse();


        //echo $courts; die();
        foreach ($courts as $court) {
          $current_court =  $court->id;
          foreach ($current_court as $key)
            echo $key->meetings->pluck('id'). " - ";
        }



        //return $this->showAll($courts);
    }
}
