<?php

namespace App\Transformers;

use App\Facility;
use League\Fractal\TransformerAbstract;

class FacilityTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Facility $facility)
    {
        return [
            'identificador' => (int)$facility->id,
            'nombre' => (string)$facility->name,
            'marca' => (string)$facility->brand,
            'precio' => (int)$facility->price,
            'fecha_compra' => (string)$facility->purchased_at,
            'cancha' => (int)$facility->court_id,
            'fecha_creacion' => (string)$facility->created_at,
            'fecha_actualizacion' => (string)$facility->updated_at,
            'fecha_eliminacion' => isset($facility->deleted_at) ? (string)$facility->deleted_at : null,

            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('facilities.show', $facility->id),
                ],
                [
                    'rel' => 'facilities.maintenance',
                    'href' => route('facilities.maintenance.index', $facility->id),
                ]
            ]
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identificador' => 'id',
            'nombre' => 'name',
            'marca' => 'brand',
            'precio' => 'price',
            'fecha_compra' => 'purchased_at',
            'cancha' => 'court_id',
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
            'brand' => 'marca',
            'price' => 'precio',
            'purchased_at' => 'fecha_compra',
            'court_id' => 'cancha',
            'created_at' => 'fecha_creacion',
            'updated_at' => 'fecha_actualizacion',
            'deleted_at' => 'fecha_eliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}