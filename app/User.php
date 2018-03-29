<?php

namespace App;

use App\Cluber;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Transformers\Transformers\UserTransformer;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens, SoftDeletes; //nos proporciona una fecha de eliminacion, para no eliminar el registro si no que ignorarlo, si es que este campo != null

    public $transformer = UserTransformer::class;

    const USERVERIFIED    = 'verified';
    const USERNOTVERIFIED = 'pending';
    const ADMIN           = 'admin';
    const REGULAR         = 'regular';


    protected $table    = 'users';

    protected $dates    = ['deleted_at'];

    //Atributos que se pueden almacenar de manera masiva
    protected $fillable = [
        'name',
        'lastname',
        'nickname',
        'email',
        'phone',
        'password',
        'picture',
        'status',
        'type',
        'code_verification'
    ];

    //oculta estos atributos del modelo al tranformarlo al array y posteriormente a json para ser enviado a traves de la api
    protected $hidden   = ['password', 'remember_token', 'deleted_at'];

    public function isVerified()
    {
        return $this->status == User::USERVERIFIED;
    }

    public static function setCodeVerification()
    {
        return str_random(40);
    }

    public static function setSMSVerification()
    {
        return rand(1000, 9999);
    }

    //mutadores, se utiliza para modificar un valor actual de un atributo antes de hacer la insercion a la base de datos
}
