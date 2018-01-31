<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model
{
	use SoftDeletes;
	
    protected $table = 'regions';

    protected $dates = ['deleted_at'];
    	
    protected $fillable = [
		'name', 'codeName', 'lat', 'lng'
    ];

    public function provinces()
    {
    	return $this->hasMany(Provinces::class);
    }
}