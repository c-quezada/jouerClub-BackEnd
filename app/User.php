<?php

namespace App;

use App\Cluber;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes; //nos proporciona una fecha de eliminacion, para no eliminar el registro si no que ignorarlo, si es que este campo != nukl
    
    const USERVERIFIED    = 'verified';
    const USERNOTVERIFIED = 'pending';
    const JOUER           = 'jouer';
    const CLUBER          = 'cluber';
    const COACH           = 'coach';
    const ADMIN           = 'admin';


    protected $table = 'users';

    protected $dates = ['deleted_at'];

    //Atributos que se pueden almacenar de manera masiva
    protected $fillable = [
        'name', 
        'lastname',
        'nickname',
        'email',
        'phone',
        'password',
        'picture_profile',
        'status',
        'type',
        'code_verification'
    ];


    //oculta estos atributos del modelo al tranformarlo al array y posteriormente a json para ser enviado a traves de la api
    protected $hidden = [
        'password', 'remember_token'
    ];

    public function isVerified()
    {
        return $this->status == User::USERVERIFIED;
    }

    public static function setCodeVerification()
    {
        return str_random(40);
    }


    public function cluber()
    {
        return $this->hasOne(Cluber::class);
    }

    //mutadores, se utiliza para modificar un valor actual de un atributo antes de hacer la insercion a la base de datos 
}
