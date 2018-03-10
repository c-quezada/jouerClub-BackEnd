<?php

namespace App;

use App\Court;
use App\Cluber;
use App\Commune;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SportField extends Model
{	
	use SoftDeletes;
	
	protected $table = 'sportsFields';

	protected $dates = ['deleted_at'];

	//Atributos que se pueden almacenar de manera masiva
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

    protected $hidden = ['commune_id', 'cluber_id'];

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

    
}
