<?php

namespace App\Http\Controllers\Cluber;

use App\Cluber;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class CluberSportFieldsController extends ApiController
{
	public function __construct()
    {
        $this->middleware('client.credentials')->only(['index']);
        $this->middleware('auth:api')->only(['index']);
    } 
    public function index(Cluber $cluber)
    {
        $sportfields = $cluber->sportfields;
        return $this->showAll($sportfields);
    }
}
