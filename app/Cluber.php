<?php

namespace App;

use App\Scopes\CluberScope;
use App\Transformers\CluberTransformer;
use Illuminate\Database\Eloquent\Model;

class Cluber extends User
{
	public $transformer = CluberTransformer::class;
	
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
 