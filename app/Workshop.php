<?php

namespace App;

use App\Coach;
use App\Jouer;
use Illuminate\Database\Eloquent\Model;
use App\Transformers\WorkshopTransformer;
use Illuminate\Database\Eloquent\SoftDeletes;

class Workshop extends Model
{
    use SoftDeletes;

    public $transformer = WorkshopTransformer::class;
	
    protected $table    = 'workshops';
    
    protected $fillable = [
        'name',
        'description',
        'lat',
        'lng',
        'time_begin',
        'time_end',
        'status',
        'coach_id'
    ];
    
    protected $dates    = ['deleted_at'];
    
    protected $hidden   = ['created_at', 'updated_at', 'deleted_at', 'coach_id'];

    public function coach()
    {
    	return $this->belongsTo(Coach::class);
    }

    public function jouers()
    {
        return $this->belongsToMany(Jouer::class);
    }
}
