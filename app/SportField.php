<?php

namespace App;

use App\Court;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SportField extends Model
{	
	use SoftDeletes;
	
	protected $table = 'sportsFields';

	protected $dates = ['deleted_at'];

	//Atributos que se pueden almacenar de manera masiva
    protected $fillable = [
    	'name', 'description', 'address', 'lat', 'lng', 'website', 'facebook', 'instagram', 'twitter', 'timeBegin', 'timeEnd'
    ];

    public function curts(){
    	return $this->hasMany(Court::class);
    }
}
