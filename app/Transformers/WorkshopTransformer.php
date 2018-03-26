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
            'descripcion' => (string)$workshop->description,
            'latitud' => (string)$workshop->lat,
            'longitud' => (string)$workshop->lng,
            'inicio' => (string)$workshop->time_begin,
            'termino' => (string)$workshop->time_end,
            'estado' => (string)$workshop->status,
            'instructor' => (int)$workshop->coach_id,
            'observaciones' => (string)$workshop->observations,
            'calificacion' => (int)$workshop->mark,
            'instalacion' => (int)$workshop->facility_id,
            'fecha_creacion' => (string)$workshop->created_at,
            'fecha_actualizacion' => (string)$workshop->updated_at,
            'fecha_eliminacion' => isset($workshop->deleted_at) ? (string)$workshop->deleted_at : null,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identificador' => 'id',
            'descripcion' => 'description',
            'latitud' => 'lat',
            'longitud' => 'lng',
            'inicio' => 'time_begin',
            'termino' => 'time_end',
            'estado' => 'status',
            'instructor' => 'coach_id',
            'observaciones' => 'observations',
            'calificacion' => 'mark',
            'instalacion' => 'facility_id',
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
            'description' => 'descripcion',
            'lat' => 'latitud',
            'lng' => 'longitud',
            'time_begin' => 'inicio',
            'time_end' => 'termino',
            'status' => 'estado',
            'coach_id' => 'instructor',
            'observations' => 'observaciones',
            'mark' => 'calificacion',
            'facility_id' => 'instalacion',
            'created_at' => 'fecha_creacion',
            'updated_at' => 'fecha_actualizacion',
            'deleted_at' => 'fecha_eliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}