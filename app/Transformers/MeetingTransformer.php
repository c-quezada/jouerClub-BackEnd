<?php

namespace App\Transformers;

use App\Meeting;
use League\Fractal\TransformerAbstract;

class MeetingTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Meeting $meeting)
    {
        return [
            'identificador' => (int)$meeting->id,
            'inicio' => (string)$meeting->time_begin,
            'termino' => (string)$meeting->time_end,
            'estado' => (string)$meeting->status,
            'cancha' => (int)$meeting->court_id,
            'fecha_creacion' => (string)$meeting->created_at,
            'fecha_actualizacion' => (string)$meeting->updated_at,
            'fecha_eliminacion' => isset($meeting->deleted_at) ? (string)$meeting->deleted_at : null,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identificador' => 'id',
            'inicio' => 'time_begin',
            'termino' => 'time_end',
            'estado' => 'status',
            'cancha' => 'court_id',
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
            'time_begin' => 'inicio',
            'time_end' => 'termino',
            'status' => 'estado',
            'court_id' => 'cancha',
            'created_at' => 'fecha_creacion',
            'updated_at' => 'fecha_actualizacion',
            'deleted_at' => 'fecha_eliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}