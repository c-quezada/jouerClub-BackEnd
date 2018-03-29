<?php

namespace App\Transformers;

use App\Sport;
use League\Fractal\TransformerAbstract;

class SportTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Sport $sport)
    {
        return [
            'identificador' => (int)$sport->id,
            'nombre' => (string)$sport->name,
            'descripcion' => (int)$sport->description,
            'fecha_creacion' => (string)$sport->created_at,
            'fecha_actualizacion' => (string)$sport->updated_at,
            'fecha_eliminacion' => isset($sport->deleted_at) ? (string)$sport->deleted_at : null,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identificador' => 'id',
            'nombre' => 'name',
            'description' => 'description',
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
            'descripcion' => 'description',
            'created_at' => 'fecha_creacion',
            'updated_at' => 'fecha_actualizacion',
            'deleted_at' => 'fecha_eliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
