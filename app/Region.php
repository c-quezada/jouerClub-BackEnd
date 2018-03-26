<?php

namespace App;

use App\Transformers\RegionTransformer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model
{
	use SoftDeletes;

    public $transformer = RegionTransformer::class;
	
    protected $table    = 'regions';
    
    protected $fillable = ['name', 'ordial'];
    
    protected $dates    = ['deleted_at'];
    
    protected $hidden   = ['created_at', 'updated_at', 'deleted_at'];

    public function provinces()
    {
    	return $this->hasMany(Provinces::class);
    }
}