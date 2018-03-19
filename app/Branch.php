<?php

namespace App;

use App\Court;
use App\Skill;
use App\Sport;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
	use SoftDeletes;
	
    protected $table    = 'branches';
    
    protected $fillable = ['name', 'sport_id'];
    
    protected $dates    = ['deleted_at'];
    
    protected $hidden   = ['pivot', 'created_at', 'updated_at', 'deleted_at'];
    
    public function court()
    {
    	return $this->belongsToMany(Court::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function sport()
    {
        return $this->belongTo(Sport::class);
    }
}
