<?php

namespace App;

use App\Branch;
use App\Facility;
use App\SportField;
use App\Scopes\CourtScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Court extends Model
{
    use SoftDeletes;

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new CourtScope);
    }
    
	protected $table = 'courts';

    protected $dates = ['deleted_at'];

    protected $fillable = [
    	'name', 'status', 'sport_field_id'
    ];


    public function sportField()
    {
    	return $this->belongsTo(SportField::class);
    }

    public function branches()
    {
    	return $this->belongsToMany(Branch::class);
    }

    public function facilities()
    {
        return $this->hasMany(Facility::class);
    }
}
