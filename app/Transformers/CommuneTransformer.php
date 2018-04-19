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
            'fechacreacion' => (string)$commune->created_at,
            'fechaactualizacion' => (string)$commune->updated_at,
            'fechaeliminacion' => isset($commune->deleted_at) ? (string)$commune->deleted_at : null,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identificador' => 'id',
            'nombre' => 'name',
            'region' => 'region_id',
            'fechacreacion' => 'createdat',
            'fechaactualizacion' => 'updatedat',
            'fechaeliminacion' => 'deletedat',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id' => 'identificador',
            'name' => 'nombre',
            'region_id' => 'region',
            'createdat' => 'fechacreacion',
            'updatedat' => 'fechaactualizacion',
            'deletedat' => 'fechaeliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
