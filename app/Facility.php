<?php

namespace App;
use App\Court;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Facility extends Model
{
	use SoftDeletes;
	
    protected $table = 'facilities';

    protected $dates = ['deleted_at'];

    protected $fillable = [
    	'name', 'brand', 'purchased_at', 'court_id'
    ];

    public function court()
    {
    	return $this->belongsTo(Court::class);
    }
}
