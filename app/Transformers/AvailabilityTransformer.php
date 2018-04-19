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
            'fechacreacion' => (string)$availability->created_at,
            'fechaactualizacion' => (string)$availability->updated_at,
            'fechaeliminacion' => isset($availability->deleted_at) ? (string)$availability->deleted_at : null,
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
            'court_id' => 'cancha',
            'jouer_id' => 'jugador',
            'time_begin' => 'inicio',
            'time_end' => 'termino',
            'status' => 'estado',
            'createdat' => 'fechacreacion',
            'updatedat' => 'fechaactualizacion',
            'deletedat' => 'fechaeliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
