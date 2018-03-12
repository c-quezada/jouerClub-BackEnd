<?php

namespace App;

use App\Jouer;
use App\Branch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{	
	use SoftDeletes;
	
    protected $table    = 'skills';
    
    protected $fillable = ['name', 'description'];
    
    protected $dates    = ['deleted_at'];
    
    protected $hidden   = ['created_at', 'updated_at', 'deleted_at'];

    public function jouer()
    {
    	return $this->belongsTo(Jouer::class);
    }

    public function skills()
    {
    	return $this->belongsTo(Branch::class);
    }

    
}
