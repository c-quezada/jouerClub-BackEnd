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
    
    //protected $dates    = ['deleted_at'];
    
    protected $hidden   = ['pivot', 'created_at', 'updated_at', 'deleted_at', 'id'];

    public function jouer()
    {
    	return $this->belongsToMany(Jouer::class);
    }

    public function branch()
    {
    	return $this->belongsTo(Branch::class);
    }

    
}
