<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cluber extends User
{
	//nombre de la tabla 
    protected $table = "clubers";

    //campos que pueden ser mostrados
    protected $fillable = [
    	'something', 'rut', 'dv'
    ];

	public function sportfields(){
		return $this->hasMany('App\SportField');
	}
}
