<?php

namespace App;

use App\SportField;
use App\Transformers\ServiceTransformer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
	use SoftDeletes;

    public $transformer = ServiceTransformer::class;
	
    protected $table    = 'services';
    
    protected $fillable = ['name', 'avatar'];
    
    protected $dates    = ['deleted_at'];

    public function sportField()
    {
    	return $this->belongsTo(SportField::class);
    }
}
