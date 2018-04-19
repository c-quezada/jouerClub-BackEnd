<?php

namespace App;

use App\Court;
use Illuminate\Database\Eloquent\Model;
use App\Transformers\MeetingTransformer;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meeting extends Model
{	
    public $transformer = MeetingTransformer::class;

	use SoftDeletes;
	
    protected $table    = 'meetings';
    
    protected $fillable = [
        'time_begin',
        'time_end',
        'status',
        'court_id'
    ];
    
    protected $dates    = ['deleted_at'];

    protected $hidden   = ['pivot', 'created_at', 'updated_at', 'deleted_at' , 'court_id'];

    public function courts()
    {
    	return $this->hasOne(Court::class);
    }

    public function jouers()
    {
        return $this->belongsToMany(Jouer::class);
    }
    
}
