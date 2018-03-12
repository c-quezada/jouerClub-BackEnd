<?php

namespace App;

use App\Province;
use App\SportField;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Commune extends Model
{
	use SoftDeletes;
	
    protected $table    = 'communes';
    
    protected $fillable = ['name', 'lat', 'lng', 'provinceCode'];
    
    protected $dates    = ['deleted_at'];
    
    protected $hidden   = ['pivot', 'created_at', 'updated_at', 'deleted_at'];

    public function province()
    {
    	return $this->belongsTo(Province::class);
    }

    public function sportfields()
    {
        return $this->hasMany(SportField::class);
    }
}