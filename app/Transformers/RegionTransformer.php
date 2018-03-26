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
            'fecha_creacion' => (string)$region->created_at,
            'fecha_actualizacion' => (string)$region->updated_at,
            'fecha_eliminacion' => isset($region->deleted_at) ? (string)$region->deleted_at : null,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identificador' => 'id',
            'nombre' => 'name',
            'ordinal' => 'code',
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
            'code' => 'ordinal',
            'created_at' => 'fecha_creacion',
            'updated_at' => 'fecha_actualizacion',
            'deleted_at' => 'fecha_eliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}