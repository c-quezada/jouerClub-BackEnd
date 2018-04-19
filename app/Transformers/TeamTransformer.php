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
            'ramadeportiva' => (int)$team->branch_id,
            'fechacreacion' => (string)$team->created_at,
            'fechaactualizacion' => (string)$team->updated_at,
            'fechaeliminacion' => isset($team->deleted_at) ? (string)$team->deleted_at : null,

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
            'ramadeportiva' => 'branchid',
            'fechacreacion' => 'createdat',
            'fechaactualizacion' => 'updated_at',
            'fechaeliminacion' => 'deleted_at'
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id' => 'identificador',
            'name' => 'nombre',
            'motto' => 'lema',
            'branchid' => 'ramadeportiva',
            'createdat' => 'fechacreacion',
            'updatedat' => 'fechaactualizacion',
            'deletedat' => 'fechaeliminacion'
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}