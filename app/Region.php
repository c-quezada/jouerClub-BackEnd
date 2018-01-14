<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'regions';
    	
    protected $fillable = [
		'name', 'codeName', 'lat', 'lng'
    ];

    public function provinces(){
    	return $this->hasMany(Provinces::class);
    }
}