<?php

namespace App;

use App\Branch;
use App\Facility;
use App\SportField;
use Illuminate\Database\Eloquent\Model;
use App\Transformers\MaintenanceTransformer;
use Illuminate\Database\Eloquent\SoftDeletes;

class Maintenance extends Model
{
    use SoftDeletes;

    public $transformer = MaintenanceTransformer::class;

    protected $table    = 'maintenance';
    
    protected $fillable = ['observations', 'status', 'facility_id'];
    
    protected $dates    = ['deleted_at'];
    
    //protected $hidden   = ['created_at', 'updated_at', 'deleted_at', 'facility_id'];

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
        return $this->belongsToMany(Facility::class);
    }
}
 