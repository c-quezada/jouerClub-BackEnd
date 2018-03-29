<?php

namespace App\Http\Controllers\Meeting;

use App\Court;
use App\Meeting;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Http\Requests\MeetingRequest;

class MeetingController extends ApiController
{

    public function index()
    {
        $meetings = Meeting::all();
        return $this->showAll($meetings);
    }

    public function store(MeetingRequest $request)
    {
        $fields                = $request->all();
        $fields['time_begin']  = $request->time_begin;     
        $fields['time_end']    = $request->time_end;
        $fields['status']      = $request->status;

        if (Court::findOrFail($request->court_id)) {
            $meeting = Meeting::create($fields); 
            return $this->showOne($meeting, 201);
        }
    }


    public function show(Meeting $meeting)
    {
        return $this->showOne($meeting);        
    }

    public function update(Request $request, Meeting $meeting)
    {

        if ($request->has('time_begin')) {
            $meeting->time_begin = $request->time_begin;
        }

        if ($request->has('time_end')) {
            $meeting->time_end = $request->time_end;
        }

        if ($request->has('status')) {
            $meeting->status = $request->status;
        }


        if ($request->has('court_id')) {
            $meeting->court_id = $request->court_id;
        }

        if (!$meeting->isDirty()) {
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar', 422);
        }

        $meeting->save();
        return $this->showOne($meeting);
    }

    public function destroy(Meeting $meeting) //meeting seria una inyeccion de instancia, con esto nos ahorramos codear: $meeting = findOrFail($id);
    {
        $meeting->delete();
        return $this->showOne($meeting);
    }
}