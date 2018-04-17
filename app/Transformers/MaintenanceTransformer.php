<?php

namespace App\Transformers;

use App\Maintenance;
use League\Fractal\TransformerAbstract;

class MaintenanceTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Maintenance $maintenance)
    {
        return [
            'identificador' => (int)$maintenance->id,
            'observaciones' => (string)$maintenance->observations,
            'calificacion' => (int)$maintenance->mark,
            'instalacion' => (int)$maintenance->facility_id,
            'fecha_creacion' => (string)$maintenance->created_at,
            'fecha_actualizacion' => (string)$maintenance->updated_at,
            'fecha_eliminacion' => isset($maintenance->deleted_at) ? (string)$maintenance->deleted_at : null,

            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('maintenances.index'),
                ]
            ]
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identificador' => 'id',
            'observaciones' => 'observations',
            'calificacion' => 'mark',
            'instalacion' => 'facility_id',
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
            'observations' => 'observaciones',
            'mark' => 'calificacion',
            'facility_id' => 'instalacion',
            'created_at' => 'fecha_creacion',
            'updated_at' => 'fecha_actualizacion',
            'deleted_at' => 'fecha_eliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}