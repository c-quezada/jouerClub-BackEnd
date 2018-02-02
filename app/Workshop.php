<?php

namespace App;

use App\Coach;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Workshop extends Model
{
    use SoftDeletes;
	
    protected $table = 'workshops';

    protected $dates = ['deleted_at'];
    	
    protected $fillable = [
		'name', 'description', 'lat', 'lng', 'time_begin', 'time_end', 'status', 'coach_id'
    ];

    public function coach()
    {
    	return $this->belongsTo(Coach::class);
    }
}
