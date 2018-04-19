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
            'fechacreacion' => (string)$court->created_at,
            'fechaactualizacion' => (string)$court->updated_at,
            'fechaeliminacion' => isset($court->deleted_at) ? (string)$court->deleted_at : null,

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
                ],
                [
                    'rel' => 'courts.meetings',
                    'href' => route('courts.meetings.index', $court->id),
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
            'status' => 'estado',
            'createdat' => 'fechacreacion',
            'updatedat' => 'fechaactualizacion',
            'deletedat' => 'fechaeliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
