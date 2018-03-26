<?php

namespace App;

use App\Team;
use App\Skill;
use App\Meeting;
use App\Workshop;
use App\Scopes\JouerScope;
use Illuminate\Database\Eloquent\Model;

class Jouer extends User
{
	protected static function boot()
	{
		parent::boot();
		static::addGlobalScope(new JouerScope);
	}

	public function skills()
	{
		return $this->belongsToMany(Skill::class);
	}

	public function teams()
	{
		return $this->belongsToMany(Team::class);	
	}

	public function meetings()
	{
		return $this->belongsToMany(Meeting::class);	
	}

	public function workshops()
	{
		return $this->belongsToMany(Workshop::class);	
	}

	

}
