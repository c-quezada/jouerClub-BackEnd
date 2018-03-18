<?php

namespace App;

use App\Jouer;
use App\Branch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
	use SoftDeletes;

	protected $table    = 'teams';
	
	protected $fillable = ['name', 'motto', 'branch_id'];
	
	protected $dates    = ['deleted_at'];

	protected $hidden   = ['created_at', 'updated_at', 'deleted_at'];
	
    public function jouers()
    {
    	return $this->belongsToMany(Jouer::class);
    }

    public function branch()
    {
    	return $this->belongsTo(Branch::class);
    }
}
