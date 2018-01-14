<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Cluber;

class User extends Authenticatable
{
    use Notifiable;

    const userVerified = 'verified';
    const userNotVerified = 'pending';

    protected $table = 'users';

    //Atributos que se pueden almacenar de manera masiva
    protected $fillable = [
        'name', 'lastname', 'email', 'phone', 'password', 'pictureProfile', 'status'
    ];


    //oculta estos atributos del modelo al tranformarlo al array y posteriormente a json para ser enviado a traves de la api
    protected $hidden = [
        'password', 'remember_token', 'codeVerification'
    ];

    public function isVerified(){
        return $this->status == User::userVerified;
    }

    public static function setCodeVerification(){
        return rand(1000,9999);
    }


    public function cluber(){
        return $this->hasOne('App\Cluber');
    }
}
