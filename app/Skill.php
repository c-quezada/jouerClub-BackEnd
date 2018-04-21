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
    
    protected $fillable = ['name', 'branch_id'];
    
    protected $dates    = ['deleted_at'];
    
    protected $hidden   = ['pivot', 'created_at', 'updated_at', 'deleted_at', 'id', 'branch_id'];

    public function jouer()
    {
    	return $this->belongsToMany(Jouer::class);
    }

    public function branch()
    {
    	return $this->belongsTo(Branch::class);
    }

    
}
