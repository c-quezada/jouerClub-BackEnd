<?php

namespace App\Http\Controllers\Court;

use App\Court;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class CourtFacilitiesController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Court $court)
    {
        $facilities = $court->facilities;
        return $this->showAll($facilities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function show(Court $court)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function edit(Court $court)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Court $court)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Court  $court
     * @return \Illuminate\Http\Response
     */
    public function destroy(Court $court)
    {
        //
    }
}
