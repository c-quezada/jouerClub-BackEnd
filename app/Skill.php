<?php

namespace App;

use App\Jouer;
use App\Branch;
use App\Transformers\SkillTransformer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{	
	use SoftDeletes;
	
    public $transformer = SkillTransformer::class;

    protected $table    = 'skills';
    
    protected $fillable = ['name', 'description'];
    
    protected $dates    = ['deleted_at'];
    
    protected $hidden   = ['pivot', 'created_at', 'updated_at', 'deleted_at'];

    public function jouer()
    {
    	return $this->belongsToMany(Jouer::class);
    }

    public function branch()
    {
    	return $this->belongsTo(Branch::class);
    }

    
}
