<?php

namespace App;

use App\Jouer;
use App\Branch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{	
	use SoftDeletes;
	
	protected $table = 'skills';

	protected $dates = ['deleted_at'];

	//Atributos que se pueden almacenar de manera masiva
    protected $fillable = [
    	'name', 'description'
    ];

    public function jouer()
    {
    	return $this->belongsTo(Jouer::class);
    }

    public function skills()
    {
    	return $this->belongsTo(Branch::class);
    }

    
}
