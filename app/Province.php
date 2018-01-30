<?php

namespace App;

use App\Region;
use App\Commune;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Province extends Model
{	
    use SoftDeletes;

	protected $table = 'provinces';

    protected $dates = ['deleted_at'];

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
