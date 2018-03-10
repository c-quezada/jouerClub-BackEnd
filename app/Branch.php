<?php

namespace App;

use App\Court;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
	use SoftDeletes;
	
	protected $table = 'branches';

	protected $dates = ['deleted_at'];
	
    protected $fillable = [
    	'name'
    ];

    protected $hidden = [
        'pivot'
    ];

    public function court()
    {
    	return $this->belongsToMany(Court::class);
    }


    public function skill()
    {
        return $this->hasMany(Skill::class);
    }
}
