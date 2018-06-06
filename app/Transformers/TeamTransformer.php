<?php

namespace App\Transformers;

use App\Team;
use League\Fractal\TransformerAbstract;

class TeamTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Team $team)
    {
        return [
            'identificador' => (int)$team->id,
            'nombre' => (string)$team->name,
            'lema' => (string)$team->motto,
            'ramaDeportiva' => (int)$team->branch_id,
            'creador'       => (int)$team->jouer_id,
            'fechaCreacion' => (string)$team->created_at,
            'fechaActualizacion' => (string)$team->updated_at,
            'fechaEliminacion' => isset($team->deleted_at) ? (string)$team->deleted_at : null,

            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('teams.show', $team->id),
                ],
                [
                    'rel' => 'teams.jouers',
                    'href' => route('teams.jouers.index', $team->id),
                ]
            ]
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identificador' => 'id',
            'nombre' => 'name',
            'lema' => 'motto',
            'ramaDeportiva' => 'branch_id',
            'creador'            => 'jouer_id',
            'fechaCreacion' => 'created_at',
            'fechaActualizacion' => 'updated_at',
            'fechaEliminacion' => 'deleted_at'
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id' => 'identificador',
            'name' => 'nombre',
            'motto' => 'lema',
            'branch_id' => 'ramaDeportiva',
            'jouer_id'   => 'creador',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizacion',
            'deleted_at' => 'fechaEliminacion'
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}