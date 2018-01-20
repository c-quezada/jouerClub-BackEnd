<?php

namespace App;
use App\Court;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $table = 'facilities';

    protected $fillable = [
    	'name', 'brand', 'purchasedAt'
    ];

    public function court(){
    	return $this->belongsTo(Court::class)
    }
}
