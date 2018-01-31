<?php

namespace App;

use App\User;
use App\SportField;
use Illuminate\Database\Eloquent\Model;

class Cluber extends User
{
	//nombre de la tabla 
    protected $table = "clubers";

    //campos que pueden ser mostrados
    protected $fillable = [
    	'something', 'rut', 'dv'
    ];


	public function user(){
		return $this->belongsTo(User::class);
	}

	public function sportfields(){
		return $this->hasMany(SportField::class);
	}
}
