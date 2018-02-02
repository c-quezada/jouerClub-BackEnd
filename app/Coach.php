<?php

namespace App;

use App\Workshop;
use App\Scopes\CoachScope;
use Illuminate\Database\Eloquent\Model;

class Coach extends User
{
	protected static function boot()
	{
		parent::boot();
		static::addGlobalScope(new CoachScope);
	}

	public function workshops()
	{
		return $this->hasMany(Workshop::class);
	}
}
