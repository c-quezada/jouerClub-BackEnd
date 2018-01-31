<?php

namespace App;

use App\Court;
use App\Cluber;
use App\Scopes\SportFieldScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SportField extends Model
{	
	use SoftDeletes;

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new SportFieldScope);
    }
	
	protected $table = 'sportsFields';

	protected $dates = ['deleted_at'];

	//Atributos que se pueden almacenar de manera masiva
    protected $fillable = [
    	'name', 'description', 'address', 'lat', 'lng', 'website', 'facebook', 'instagram', 'twitter', 'cluber_id', 'time_begin', 'time_end'
    ];

    public function cluber()
    {
        return $this->belongsTo(Cluber::class);
    }

    public function courts()
    {
    	return $this->hasMany(Court::class);
    }

    
}
