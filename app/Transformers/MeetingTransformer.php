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
            'identificador'      => (int)$meeting->id,
            'inicio'             => (string)$meeting->time_begin,
            'termino'            => (string)$meeting->time_end,
            'estado'             => (string)$meeting->status,
            'cancha'             => (int)$meeting->court_id,
            'creador'            => (int)$meeting->jouer_id,
            'fechaCreacion'      => (string)$meeting->created_at,
            'fechaActualizacion' => (string)$meeting->updated_at,
            'fechaEliminacion'   => isset($meeting->deleted_at) ? (string)$meeting->deleted_at : null,

            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('meetings.index')
                ],
                [
                    'rel' => 'meetings.participants',
                    'href' => route('meetings.participants.index', $meeting->id),
                ],
            ]
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identificador'      => 'id',
            'inicio'             => 'time_begin',
            'termino'            => 'time_end',
            'estado'             => 'status',
            'cancha'             => 'court_id',
            'creador'            => 'jouer_id',
            'fechaCreacion'      => 'created_at',
            'fechaActualizacion' => 'updated_at',
            'fechaEliminacion'   => 'deleted_at'
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id'         => 'identificador',
            'time_begin' => 'inicio',
            'time_end'   => 'termino',
            'status'     => 'estado',
            'court_id'   => 'cancha',
            'jouer_id'   => 'creador',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizacion',
            'deleted_at' => 'fechaEliminacion'
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}