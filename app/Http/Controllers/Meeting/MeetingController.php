<?php

namespace App\Http\Controllers\Meeting;

use App\Court;
use App\Jouer;
use App\User;
use App\Meeting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Http\Requests\MeetingRequest;
use App\Transformers\MeetingTransformer;

class MeetingController extends ApiController
{
    public function __construct()
    {
        $this->middleware('client.credentials')->only(['index', 'show']);
        $this->middleware('auth:api')->except(['index', 'show']);
        $this->middleware('transform.input:' . MeetingTransformer::class)->only(['store', 'update']);
    }

    public function index()
    {
        $meetings = Meeting::all();
        return $this->showAll($meetings);
    }

    public function store(MeetingRequest $request)
    {
        $fields     = $request->all();

        $jouer = Jouer::findOrFail($request->jouer_id);

        if (Court::findOrFail($request->court_id)) {
            if ($request->time_begin < Carbon::now() || $request->time_end > $request->time_begin) {
               return $this->errorResponse('No es posible crear este encuentro. Procura que la fecha sea próxima o bien que la fecha de termino sea posterior a la de inicio.', 403);
            }

        $meeting = Meeting::create($fields); 
        $current_meeting = Meeting::all()->last()->id;
        $jouer->meetings()->attach(array($current_meeting));
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