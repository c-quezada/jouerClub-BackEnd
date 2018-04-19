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
            'fechaCreacion' => (string)$maintenance->created_at,
            'fechaActualizacion' => (string)$maintenance->updated_at,
            'fechaEliminacion' => isset($maintenance->deleted_at) ? (string)$maintenance->deleted_at : null,

            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('maintenances.show', $maintenance->id),
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
            'observations' => 'observaciones',
            'mark' => 'calificacion',
            'facility_id' => 'instalacion',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizacion',
            'deleted_at' => 'fechaEliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
