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
            'fechacreacion' => (string)$sport->created_at,
            'fechaactualizacion' => (string)$sport->updated_at,
            'fechaeliminacion' => isset($sport->deleted_at) ? (string)$sport->deleted_at : null,

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
            'description' => 'descripcion',
            'createdat' => 'fechacreacion',
            'updatedat' => 'fechaactualizacion',
            'deletedat' => 'fechaeliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
