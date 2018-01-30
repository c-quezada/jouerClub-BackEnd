<?php

namespace App;

use App\Court;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
	use SoftDeletes;
	
	protected $table = 'brances';

	protected $dates = ['deleted_at'];
	
    protected $fillable = [
    	'name'
    ];

    public function curts(){
    	return $this->belongsToMany(Court::class);
    }
}
