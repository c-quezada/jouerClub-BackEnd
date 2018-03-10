<?php

namespace App;

use App\Branch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sport extends Model
{   
    use SoftDeletes;
    
    protected $table = 'sports';

    protected $dates = ['deleted_at'];

    //Atributos que se pueden almacenar de manera masiva
    protected $fillable = [
        'name', 'description'
    ];

    public function branches()
    {
        return $this->hasMany(Branch::class);
    }

    
}
