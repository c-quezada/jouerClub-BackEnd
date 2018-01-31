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

	//nombre de la tabla 
    //protected $table = "clubers";

    //campos que pueden ser mostrados
    /*protected $fillable = [
    	'something', 'rut', 'dv'
    ];*/

	public function sportfields()
	{
		return $this->hasMany(SportField::class);
	}
}
