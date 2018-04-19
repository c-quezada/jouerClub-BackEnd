<?php

namespace App\Transformers;

use App\Workshop;
use League\Fractal\TransformerAbstract;

class WorkshopTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Workshop $workshop)
    {
        return [
            'identificador' => (int)$workshop->id,
            'nombre' => (string)$workshop->name,
            'descripcion' => (string)$workshop->description,
            'latitud' => (string)$workshop->lat,
            'longitud' => (string)$workshop->lng,
            'inicio' => (string)$workshop->time_begin,
            'termino' => (string)$workshop->time_end,
            'estado' => (string)$workshop->status,
            'instructor' => (int)$workshop->coach_id,
            'fechacreacion' => (string)$workshop->created_at,
            'fechaactualizacion' => (string)$workshop->updated_at,
            'fechaeliminacion' => isset($workshop->deleted_at) ? (string)$workshop->deleted_at : null,

            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('workshops.show', $workshop->id),
                ],
                [
                    'rel' => 'workshops.participants',
                    'href' => route('workshops.participants.index', $workshop->id),
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
            'latitud' => 'lat',
            'longitud' => 'lng',
            'inicio' => 'timebegin',
            'termino' => 'timeend',
            'estado' => 'status',
            'instructor' => 'coachid',
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
            'lat' => 'latitud',
            'lng' => 'longitud',
            'timebegin' => 'inicio',
            'timeend' => 'termino',
            'status' => 'estado',
            'coachid' => 'instructor',
            'createdat' => 'fechacreacion',
            'updatedat' => 'fechaactualizacion',
            'deletedat' => 'fechaeliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}