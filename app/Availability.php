<?php

namespace App;

use App\Court;
use App\Skill;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Availability extends Model
{
	use SoftDeletes;
	
    protected $table    = 'availabilities';
    
    protected $fillable = ['court_id', 'jouer_id', 'time_begin', 'time_end', 'status'];
    
    protected $dates    = ['deleted_at'];
    
    protected $hidden   = ['created_at', 'updated_at', 'deleted_at'];
    
    public function court()
    {
    	return $this->belongsToMany(Court::class);
    }

    public function skill()
    {
        return $this->hasMany(Skill::class);
    }
}