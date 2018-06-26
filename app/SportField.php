<?php

namespace App;

use App\Court;
use App\Cluber;
use App\Commune;
use App\Service;
use Illuminate\Database\Eloquent\Model;
use App\Transformers\SportfieldTransformer;
use Illuminate\Database\Eloquent\SoftDeletes;

class SportField extends Model
{
	use SoftDeletes;

    public $transformer = SportfieldTransformer::class;

    protected $table    = 'sportsFields';

    protected $fillable = [
        'name',
        'description',
        'address',
        'lat',
        'lng',
        'website',
        'facebook',
        'instagram',
        'twitter',
        'time_begin',
        'time_end',
        'cluber_id',
        'commune_id'
    ];

    protected $dates    = ['deleted_at'];

    protected $hidden   = ['commune_id', 'cluber_id'];

    public function cluber()
    {
        return $this->belongsTo(Cluber::class);
    }

    public function courts()
    {
    	return $this->hasMany(Court::class);
    }

    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }


}
