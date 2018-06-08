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
            'avatar' => (string)$facility->avatar,
            'vida' => (int)$facility->useful,
            'fechaCompra' => (string)$facility->purchased_at,
            'cancha' => (int)$facility->court_id,
            'fechaCreacion' => (string)$facility->created_at,
            'fechaActualizacion' => (string)$facility->updated_at,
            'fechaEliminacion' => isset($facility->deleted_at) ? (string)$facility->deleted_at : null,

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
            'avatar' => 'avatar',
            'vida' => 'useful',
            'fechaCompra' => 'purchased_at',
            'cancha' => 'court_id',
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
            'brand' => 'marca',
            'price' => 'precio',
            'avatar' => 'avatar',
            'useful' => 'vida',
            'purchased_at' => 'fechaCompra',
            'court_id' => 'cancha',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizacion',
            'deleted_at' => 'fechaEliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
