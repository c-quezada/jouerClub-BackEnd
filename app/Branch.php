<?php

namespace App;

use App\Court;
use App\Skill;
use App\Sport;
use App\Transformers\BranchTransformer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
	use SoftDeletes;

    public $transformer = BranchTransformer::class;
	
    protected $table    = 'branches';
    
    protected $fillable = ['name'];
    
    protected $dates    = ['deleted_at'];
    
    protected $hidden   = ['pivot', 'id', 'sport_id'];
    
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
