<?php

namespace App\Transformers;

use App\Commune;
use League\Fractal\TransformerAbstract;

class CommuneTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Commune $commune)
    {
        return [
            'identificador' => (int)$commune->id,
            'nombre' => (string)$commune->name,
            'region' => (int)$commune->region_id,
            'fechaCreacion' => (string)$commune->created_at,
            'fechaActualizacion' => (string)$commune->updated_at,
            'fechaEliminacion' => isset($commune->deleted_at) ? (string)$commune->deleted_at : null,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identificador' => 'id',
            'nombre' => 'name',
            'region' => 'region_id',
            'fechaCreacion' => 'created_at',
            'fechaActualizacion' => 'update_at',
            'fechaEliminacion' => 'deleted_at',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id' => 'identificador',
            'name' => 'nombre',
            'region_id' => 'region',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizacion',
            'deleted_at' => 'fechaEliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
