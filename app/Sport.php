<?php

namespace App;

use App\Team;
use App\Branch;
use App\Transformers\SportTransformer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sport extends Model
{   
    use SoftDeletes;

    public $transformer = SportTransformer::class;
    
    protected $table    = 'sports';
    
    protected $fillable = ['name', 'description'];

    //protected $dates    = ['deleted_at'];
    
    protected $hidden   = ['created_at', 'updated_at', 'deleted_at'];

    public function branches()
    {
        return $this->hasMany(Branch::class);
    }

    public function teams()
    {
    	return $this->hasMany(Team::class);
    }
    
}
