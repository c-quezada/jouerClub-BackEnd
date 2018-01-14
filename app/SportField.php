<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Court;

class SportField extends Model
{	
	protected $table = 'sportsFields';

	//Atributos que se pueden almacenar de manera masiva
    protected $fillable = [
    	'name', 'description', 'address', 'lat', 'lng', 'website', 'facebook', 'instagram', 'twitter', 'timeBegin', 'timeEnd'
    ];

    public function curts(){
    	return $this->hasMany(Court::class);
    }
}
