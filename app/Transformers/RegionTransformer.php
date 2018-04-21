<?php

namespace App\Transformers;

use App\Region;
use League\Fractal\TransformerAbstract;

class RegionTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Region $region)
    {
        return [
            'identificador' => (int)$region->id,
            'nombre' => (string)$region->name,
            'ordinal' => (string)$region->code,
            'fechaCreacion' => (string)$region->created_at,
            'fechaActualizacion' => (string)$region->updated_at,
            'fechaEliminacion' => isset($region->deleted_at) ? (string)$region->deleted_at : null,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identificador' => 'id',
            'nombre' => 'name',
            'ordinal' => 'code',
            'fechaCreacion' => 'created_at',
            'fechaActualizacion' => 'updated_at',
            'fechaEliminacion' => 'deleted_at',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id' => 'identificador',
            'name' => 'nombre',
            'code' => 'ordinal',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizacion',
            'deleted_at' => 'fechaEliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}