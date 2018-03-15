<?php

namespace App;

use App\Scopes\CluberScope;
use Illuminate\Database\Eloquent\Model;

class Cluber extends User
{
	protected static function boot()
	{
		parent::boot();
		static::addGlobalScope(new CluberScope);
	}

	public function sportfields()
	{
		return $this->hasMany(SportField::class);
	}
}
 