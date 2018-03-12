<?php

namespace App;

use App\Team;
use App\Skill;
use App\Scopes\CluberScope;
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
		return $this->hasMany(Skill::class);
	}

	public function teams()
	{
		return $this->belongsToMany(Team::class);	
	}
}
