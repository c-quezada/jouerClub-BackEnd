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
            'ubication' => (string)$workshop->ubication,
            'latitud' => (string)$workshop->lat,
            'longitud' => (string)$workshop->lng,
            'inicio' => (string)$workshop->time_begin,
            'termino' => (string)$workshop->time_end,
            'estado' => (string)$workshop->status,
            'instructor' => (int)$workshop->coach_id,
            'fechaCreacion' => (string)$workshop->created_at,
            'fechaActualizacion' => (string)$workshop->updated_at,
            'fechaEliminacion' => isset($workshop->deleted_at) ? (string)$workshop->deleted_at : null,

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
            'ubicacion' => 'ubication',
            'latitud' => 'lat',
            'longitud' => 'lng',
            'inicio' => 'time_begin',
            'termino' => 'time_end',
            'estado' => 'status',
            'instructor' => 'coach_id',
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
            'ubication' => 'ubicacion',
            'lat' => 'latitud',
            'lng' => 'longitud',
            'time_begin' => 'inicio',
            'time_end' => 'termino',
            'status' => 'estado',
            'coach_id' => 'instructor',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizacion',
            'deleted_at' => 'fechaEliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}