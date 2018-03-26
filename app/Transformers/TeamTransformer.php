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
            'rama_deportiva' => (int)$team->branch_id,
            'fecha_creacion' => (string)$team->created_at,
            'fecha_actualizacion' => (string)$team->updated_at,
            'fecha_eliminacion' => isset($team->deleted_at) ? (string)$team->deleted_at : null,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identificador' => 'id',
            'nombre' => 'name',
            'lema' => 'motto',
            'rama_deportiva' => 'branch_id'
            'fecha_creacion' => 'created_at',
            'fecha_actualizacion' => 'updated_at',
            'fecha_eliminacion' => 'deleted_at',
        ];
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id' => 'identificador',
            'name' => 'nombre',
            'motto' => 'lema',
            'branch_id' => 'rama_deportiva',
            'created_at' => 'fecha_creacion',
            'updated_at' => 'fecha_actualizacion',
            'deleted_at' => 'fecha_eliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}