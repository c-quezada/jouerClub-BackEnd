<?php

namespace App\Transformers;

use App\Court;
use League\Fractal\TransformerAbstract;

class CourtTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Court $court)
    {
        return [
            'identificador' => (int)$court->id,
            'nombre' => (string)$court->name,
            'estado' => (string)$court->status,
            'fecha_creacion' => (string)$court->created_at,
            'fecha_actualizacion' => (string)$court->updated_at,
            'fecha_eliminacion' => isset($court->deleted_at) ? (string)$court->deleted_at : null,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identificador' => 'id',
            'nombre' => 'name',
            'estado' => 'status',
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
            'status' => 'estado',
            'created_at' => 'fecha_creacion',
            'updated_at' => 'fecha_actualizacion',
            'deleted_at' => 'fecha_eliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
