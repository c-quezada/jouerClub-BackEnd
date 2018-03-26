<?php

namespace App\Transformers;

use App\Cluber;
use League\Fractal\TransformerAbstract;

class CluberTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Cluber $cluber)
    {
        return [
            'identificador' => (int)$cluber->id,
            'nombre' => (string)$cluber->name,
            'apellido' => (string)$cluber->lastname,
            'alias' => (string)$cluber->nickname,
            'correo' => (string)$cluber->email,
            'celular' => (int)$cluber->phone,
            'contraseña' => (string)$cluber->password,
            'foto_perfil' => (string)$cluber->picture_profile,
            'fecha_creacion' => (string)$cluber->created_at,
            'fecha_actualizacion' => (string)$cluber->updated_at,
            'fecha_eliminacion' => isset($cluber->deleted_at) ? (string)$cluber->deleted_at : null,


            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('clubers.show', $cluber->id),
                ],
                [
                    'rel' => 'clubers.sportfields',
                    'href' => route('clubers.sportfields.index', $cluber->id),
                ]
            ]
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
            'foto_perfil' => 'picture_profile',
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
            'picture_profile' => 'foto_perfil',
            'created_at' => 'fecha_creacion',
            'updated_at' => 'fecha_actualizacion',
            'deleted_at' => 'fecha_eliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
