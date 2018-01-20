<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SportField;
use App\Branch;
use App\Facility;

class Court extends Model
{

	protected $table = 'courts';

    protected $fillable = [
    	'name', 'status'
    ];


    public function sportField(){
    	return $this->belongsTo(SportField::class);
    }

    public function branches(){
    	return $this->belongsToMany(Branch::class);
    }

    public function facilities(){
        return $this->hasMany(Facility::class);
    }
}
