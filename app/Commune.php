<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Province;

class Commune extends Model
{
	protected $table = 'communes';
	
    protected $fillable = [
    	'name', 'lat', 'lng', 'provinceCode'
    ];

    public function province(){
    	return $this->belongsTo(Province::class);
    }
}