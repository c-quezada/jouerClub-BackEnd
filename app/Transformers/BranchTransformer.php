<?php

namespace App\Transformers;

use App\Branch;
use League\Fractal\TransformerAbstract;

class BranchTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Branch $branch)
    {
        return [
            'identificador' => (int)$branch->id,
            'nombre' => (string)$branch->name,
            'deporte' => (int)$branch->sport_id,
            'fecha_creacion' => (string)$branch->created_at,
            'fecha_actualizacion' => (string)$branch->updated_at,
            'fecha_eliminacion' => isset($branch->deleted_at) ? (string)$branch->deleted_at : null,

            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('branches.show', $branch->id),
                ],
            ]
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identificador' => 'id',
            'nombre' => 'name',
            'deporte' => 'sport_id',
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
            'name' => 'nombre',
            'sport_id' => 'deporte',
            'created_at' => 'fecha_creacion',
            'updated_at' => 'fecha_actualizacion',
            'deleted_at' => 'fecha_eliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
