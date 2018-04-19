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
            'fechacreacion'      => (string)$meeting->created_at,
            'fechaactualizacion' => (string)$meeting->updated_at,
            'fechaeliminacion'   => isset($meeting->deleted_at) ? (string)$meeting->deleted_at : null,

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
            'inicio'             => 'timebegin',
            'termino'            => 'timeend',
            'estado'             => 'status',
            'cancha'             => 'courtid',
            'fechacreacion'      => 'createdat',
            'fechaactualizacion' => 'updatedat',
            'fechaeliminacion'   => 'deletedat'
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id'        => 'identificador',
            'timebegin' => 'inicio',
            'timeend'   => 'termino',
            'status'    => 'estado',
            'courtid'   => 'cancha',
            'createdat' => 'fechacreacion',
            'updatedat' => 'fechaactualizacion',
            'deletedat' => 'fechaeliminacion'
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}