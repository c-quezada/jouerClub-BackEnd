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

    public function courts()
    {
    	return $this->belongsToMany(Court::class);
    }
}
