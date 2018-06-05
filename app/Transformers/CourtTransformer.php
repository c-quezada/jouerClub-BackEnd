<?php

namespace App\Transformers;

use App\Court;
use League\Fractal\TransformerAbstract;

class CourtTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Court $court)
    {
        return [
            'identificador' => (int)$court->id,
            'nombre' => (string)$court->name,
            'estado' => (string)$court->status,
            'avatar' => (string)$court->avatar,
            'recinto' => (int)$court->sport_field_id,
            'fechaCreacion' => (string)$court->created_at,
            'fechaActualizacion' => (string)$court->updated_at,
            'fechaEliminacion' => isset($court->deleted_at) ? (string)$court->deleted_at : null,

            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('courts.show', $court->id),
                ],
                [
                    'rel' => 'courts.branches',
                    'href' => route('courts.branches.index', $court->id),
                ],
                [
                    'rel' => 'courts.facilities',
                    'href' => route('courts.facilities.index', $court->id),
                ]
            ]
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identificador' => 'id',
            'nombre' => 'name',
            'estado' => 'status',
            'avatar' => 'avatar',
            'recinto' => 'sport_field_id',
            'fechaCreacion' => 'created_at',
            'fechaActualizacion' => 'updated_at',
            'fechaEliminacion' => 'deleted_at',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id' => 'identificador',
            'name' => 'nombre',
            'status' => 'estado',
            'avatar' => 'avatar',
            'sport_field_id' => 'recinto',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizacion',
            'deleted_at' => 'fechaEliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
