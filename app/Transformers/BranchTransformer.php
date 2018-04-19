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
            'fechaCreacion' => (string)$branch->created_at,
            'fechaActualizacion' => (string)$branch->updated_at,
            'fechaEliminacion' => isset($branch->deleted_at) ? (string)$branch->deleted_at : null
            ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identificador' => 'id',
            'nombre' => 'name',
            'deporte' => 'sportId',
            'fechCreacion' => 'createdAt',
            'fechaActualizacion' => 'updatedAt',
            'fechaEliminacion' => 'deletedAt',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id' => 'identificador',
            'name' => 'nombre',
            'sportId' => 'deporte',
            'createdAt' => 'fechaCreacion',
            'updatedAt' => 'fechaActualizacion',
            'deletedAt' => 'fechaEliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
