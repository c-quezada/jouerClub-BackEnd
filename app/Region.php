<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model
{
	use SoftDeletes;
	
    protected $table    = 'regions';
    
    protected $fillable = ['name', 'codeName', 'lat', 'lng'];
    
    protected $dates    = ['deleted_at'];
    
    protected $hidden   = ['created_at', 'updated_at', 'deleted_at'];

    public function provinces()
    {
    	return $this->hasMany(Provinces::class);
    }
}