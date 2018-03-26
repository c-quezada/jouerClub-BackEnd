<?php

namespace App;

use App\Team;
use App\Skill;
use App\Scopes\JouerScope;
use App\Transformers\JouerTransformer;
use Illuminate\Database\Eloquent\Model;

class Jouer extends User
{
	public $transformer = JouerTransformer::class;

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
}
