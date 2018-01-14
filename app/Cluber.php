<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Cluber extends User
{
	//nombre de la tabla 
    protected $table = "clubers";

    //campos que pueden ser mostrados
    protected $fillable = [
    	'user_id'
    ];


	public function user(){
	  return $this->belongsTo(User::class);
	}
}
