<?php

namespace App;


use App\Branch;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    public function branches()
    {
    	$this->hasMany(Branch::class);
    }
