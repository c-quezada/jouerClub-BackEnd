<?php

namespace App\Transformers;

use App\Service;
use League\Fractal\TransformerAbstract;

class BranchTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Service $service)
    {
        return [
            'identificador' => (int)$service->id,
            'nombre' => (string)$service->name,
            'avatar' => (string)$service->avatar,
            'fechaCreacion' => (string)$service->created_at,
            'fechaActualizacion' => (string)$service->updated_at,
            'fechaEliminacion' => isset($service->deleted_at) ? (string)$service->deleted_at : null,

            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('services.index'),
                ]
            ]
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identificador' => 'id',
            'nombre' => 'name',
            'avatar' => 'avatar',
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
            'avatar' => 'avatar',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizacion',
            'deleted_at' => 'fechaEliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
