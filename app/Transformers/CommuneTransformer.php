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
            'latitud' => (string)$commune->lat,
            'longitud' => (string)$commune->lng,
            'provincia' => (int)$commune->provinceCode,
            'fecha_creacion' => (string)$commune->created_at,
            'fecha_actualizacion' => (string)$commune->updated_at,
            'fecha_eliminacion' => isset($commune->deleted_at) ? (string)$commune->deleted_at : null,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identificador' => 'id',
            'nombre' => 'name',
            'region' => 'region_id',
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
            'region_id' => 'region',
            'created_at' => 'fecha_creacion',
            'updated_at' => 'fecha_actualizacion',
            'deleted_at' => 'fecha_eliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
