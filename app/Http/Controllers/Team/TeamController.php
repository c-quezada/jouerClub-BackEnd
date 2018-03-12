<?php

namespace App\Http\Controllers\Team;

use App\Team;
use App\Sport;
use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;
use App\Http\Controllers\ApiController;

class TeamController extends ApiController
{
    public function index()
    {
        $teams = Team::all();
        return $this->showAll($teams);
    }

    public function store(TeamRequest $request)
    {
        $fields                  = $request->all();
        $fields['name']          = ucwords($request->name);     
        $fields['motto']         = $request->motto;
        $fields['sport_id']      = $request->sport_id;

        if (Sport::findOrFail($request->sport_id)) {
            $team = Team::create($fields); 
            return $this->showOne($team, 201);
        }
    }

    public function show(Team $team)
    {
        return $this->showOne($team);        
    }

    public function update(TeamRequest $request, Team $team)
    {
        if ($request->has('name')) {
            $team->name = $request->name;
        }

        if ($request->has('motto')) {
            $team->motto = $request->motto;
        }

        if (!$team->isDirty()) {
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar', 422);
        }

        $team->save();
        return $this->showOne($team);
    }

    public function destroy(Team $team)
    {
    	$team->delete();
        return $this->showOne($team);
    }
}



