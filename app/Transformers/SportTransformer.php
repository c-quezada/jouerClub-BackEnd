<?php

namespace App\Transformers;

use App\Sport;
use League\Fractal\TransformerAbstract;

class SportTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Sport $sport)
    {
        return [
            'identificador' => (int)$sport->id,
            'nombre' => (string)$sport->name,
            'descripcion' => (string)$sport->description,
            'fechaCreacion' => (string)$sport->created_at,
            'fechaActualizacion' => (string)$sport->updated_at,
            'fechaEliminacion' => isset($sport->deleted_at) ? (string)$sport->deleted_at : null,

            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('sports.index'),
                ],
                [
                    'rel' => 'sports.branches',
                    'href' => route('sports.branches.index', $sport->id),
                ]
            ]
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identificador' => 'id',
            'nombre' => 'name',
            'descripcion' => 'description',
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
            'description' => 'descripcion',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizacion',
            'deleted_at' => 'fechaEliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
