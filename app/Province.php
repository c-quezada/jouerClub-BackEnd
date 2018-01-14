<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Region;
use App\Commune;

class Province extends Model
{	
	protected $table = 'provinces';

    protected $fillable = [
    	'name', 'lat', 'lng', 'regionCode'
    ];

    public function region(){
    	return $this->belongsTo(Region::class);
    }

    public function communes(){
    	return $this->hasMany(Commune::class);
    }
}
