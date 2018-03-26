<?php

namespace App\Transformers;

use App\Availability;
use League\Fractal\TransformerAbstract;

class AvailabilityTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Availability $availability)
    {
        return [
            'identificador' => (int)$availability->id,
            'cancha' => (int)$availability->court_id,
            'jugador' => (int)$availability->jouer_id,
            'inicio' => (string)$availability->time_begin,
            'termino' => (string)$availability->time_end,
            'estado' => (string)$availability->status,
            'fecha_creacion' => (string)$availability->created_at,
            'fecha_actualizacion' => (string)$availability->updated_at,
            'fecha_eliminacion' => isset($availability->deleted_at) ? (string)$availability->deleted_at : null,
        ];
    }

    public static function originalAttribute($index) //al ser estatico no necesitamos una instancia real
    {
        $attributes = [
            'identificador' => 'id',
            'cancha' => 'court_id',
            'jugador' => 'jouer_id',
            'inicio' => 'time_begin',
            'termino' => 'time_end',
            'estado' => 'status',
            'fecha_creacion' => 'created_at',
            'fecha_actualizacion' => 'updated_at',
            'fecha_eliminacion' => 'deleted_at',
        ];
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id' => 'identificador',
            'court_id' => 'cancha',
            'jouer_id' => 'jugador',
            'time_begin' => 'inicio',
            'time_end' => 'termino',
            'status' => 'estado',
            'created_at' => 'fecha_creacion',
            'updated_at' => 'fecha_actualizacion',
            'deleted_at' => 'fecha_eliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}