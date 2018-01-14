<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends User
{
	//nombre de la tabla 
    protected $table = "coaches";

    //campos que pueden ser mostrados
    protected $fillable = [
    	'user_id'
    ];


	public function user(){
	  return $this->belongsTo(User::class);
	}
}
