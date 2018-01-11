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
    	'userId'
    ];


    public function user(){
        return $this->belongsTo('App\User');
    }
}
