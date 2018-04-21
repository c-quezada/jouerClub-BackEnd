<?php

namespace App\Transformers;

use App\Jouer;
use League\Fractal\TransformerAbstract;

class JouerTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Jouer $jouer)
    {
        return [
            'identificador'      => (int)$jouer->id,
            'nombre'             => (string)$jouer->name,
            'apellido'           => (string)$jouer->lastname,
            'alias'              => (string)$jouer->nickname,
            'correo'             => (string)$jouer->email,
            'celular'            => (string)$jouer->phone,
            'contraseña'         => (string)$jouer->password,
            'avatar'             => (string)$jouer->avatar,
            'fechaCreacion'      => (string)$jouer->created_at,
            'fechaActualizacion' => (string)$jouer->updated_at,
            'fechaEliminacion'   => isset($jouer->deleted_at) ? (string)$jouer->deleted_at : null,

            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('jouers.show', $jouer->id),
                ],
                [
                    'rel' => 'jouers.skills',
                    'href' => route('jouers.skills.index', $jouer->id),
                ],
                [
                    'rel' => 'jouers.teams',
                    'href' => route('jouers.teams.index', $jouer->id),
                ],
                [
                    'rel' => 'jouers.meetings',
                    'href' => route('jouers.meetings.index', $jouer->id),
                ],
                [
                    'rel' => 'jouers.workshops',
                    'href' => route('jouers.workshops.index', $jouer->id),
                ]
            ]
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identificador'      => 'id',
            'nombre'             => 'name',
            'apellido'           => 'lastname',
            'alias'              => 'nickname',
            'correo'             => 'email',
            'celular'            => 'phone',
            'contraseña'         => 'password',
            'avatar'             => 'avatar',
            'fechaCreacion'      => 'created_at',
            'fechaActualizacion' => 'updated_at',
            'fechaEliminacion'   => 'deleted_at'
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id'         => 'identificador',
            'name'       => 'nombre',
            'lastname'   => 'apellido',
            'nickname'   => 'alias',
            'email'      => 'correo',
            'phone'      => 'celular',
            'password'   => 'contraseña',
            'avatar'     => 'avatar',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizacion',
            'deleted_at' => 'fechaEliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
