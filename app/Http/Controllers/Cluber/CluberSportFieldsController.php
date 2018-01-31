<?php

namespace App\Http\Controllers\Cluber;

use App\Cluber;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class CluberSportFieldsController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Cluber $cluber)
    {
        $sportfields = $cluber->sportfields;
        return $this->showAll($sportfields);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Cluber $cluber)
    {
        //
    }


    public function edit(Cluber $cluber)
    {
        //
    }

    public function update(Request $request, Cluber $cluber)
    {
        //
    }


    public function destroy(Cluber $cluber)
    {
        //
    }
}
