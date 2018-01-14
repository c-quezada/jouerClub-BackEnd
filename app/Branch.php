<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Court;

class Branch extends Model
{
	protected $table = 'brances';
	
    protected $fillable = [
    	'name'
    ];

    public function curts(){
    	return $this->belongsToMany(Court::class);
    }
}
