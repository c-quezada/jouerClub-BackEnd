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
            'celular' => (string)$cluber->phone,
            'contraseña' => (string)$cluber->password,
            'avatar' => (string)$cluber->avatar,
            'fechacreacion' => (string)$cluber->created_at,
            'fechaactualizacion' => (string)$cluber->updated_at,
            'fechaeliminacion' => isset($cluber->deleted_at) ? (string)$cluber->deleted_at : null,


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
            'avatar' => 'avatar',
            'fechacreacion' => 'createdat',
            'fechaactualizacion' => 'updatedat',
            'fechaeliminacion' => 'deletedat',
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
            'avatar' => 'avatar',
            'createdat' => 'fechacreacion',
            'updatedat' => 'fechaactualizacion',
            'deletedat' => 'fechaeliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
