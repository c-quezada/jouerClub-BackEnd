<?php

namespace App\Transformers\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(User $user)
    { // array para transformar los indices de la BD
        return [
            'identificador' => (int)$user->id,
            'nombre' => (string)$user->name,
            'apellido' => (string)$user->lastname,
            'alias' => (string)$user->nickname,
            'correo' => (string)$user->email,
            'celular' => (int)$user->phone,
            'contraseña' => (string)$user->password,
            'foto' => (string)$user->photo,
            'estado' => (string)$user->status,
            'tipo' => (string)$user->type,
            'codigo_verificacion' => (string)$user->code_verification,
            'fecha_creacion' => (string)$user->created_at,
            'fecha_actualizacion' => (string)$user->updated_at,
            'fecha_eliminacion' => isset($user->deleted_at) ? (string)$user->deleted_at : null,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identificador' => 'id',
            'nombre' => 'name',
            'apellido' => 'lastname',
            'alias' => 'nickname',
            'correo' => 'email',
            'celular' => 'phone',
            'contraseña' => 'password',
            'foto' => 'photo',
            'estado' => 'status',
            'tipo' => 'type',
            'codigo_verificacion' => 'code_verification',
            'fecha_creacion' => 'created_at',
            'fecha_actualizacion' => 'updated_at',
            'fecha_eliminacion' => 'deleted_at',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id' => 'identificador',
            'name' => 'nombre',
            'lastname' => 'apellido',
            'nickname' => 'alias',
            'email' => 'correo',
            'phone' => 'celular',
            'password' => 'contraseña',
            'photo' => 'foto',
            'status' => 'estado',
            'type' => 'tipo',
            'code_verification' => 'codigo_verificacion',
            'created_at' => 'fecha_creacion',
            'updated_at' => 'fecha_actualizacion',
            'deleted_at' => 'fecha_eliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
