<?php

namespace App\Transformers;

use App\SportField;
use League\Fractal\TransformerAbstract;

class SportfieldTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(SportField $sportfield)
    {
        return [
            'identificador' => (int)$sportfield->id,
            'nombre' => (string)$sportfield->name,
            'descripcion' => (string)$sportfield->description,
            'direccion' => (string)$sportfield->address,
            'latitud' => (string)$sportfield->lat,
            'longitud' => (string)$sportfield->lng,
            'paginaWeb' => (string)$sportfield->website,
            'facebook' => (string)$sportfield->facebook,
            'instagram' => (string)$sportfield->instagram,
            'twitter' => (string)$sportfield->twitter,
            'apertura' => (string)$sportfield->time_begin,
            'cierre' => (string)$sportfield->time_end,
            'propietario' => (int)$sportfield->cluber_id,
            'comuna' => (int)$sportfield->commune_id,
            'fechaCreacion' => (string)$sportfield->created_at,
            'fechaActualizacion' => (string)$sportfield->updated_at,
            'fechaEliminacion' => isset($sportfield->deleted_at) ? (string)$sportfield->deleted_at : null,

            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('sportfields.show', $sportfield->id),
                ],
                [
                    'rel' => 'sportfields.courts',
                    'href' => route('sportfields.courts.index', $sportfield->id),
                ]
            ]
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identificador' => 'id',
            'nombre' => 'name',
            'descripcion' => 'description',
            'direccion' => 'address',
            'latitud' => 'lat',
            'longitud' => 'lng',
            'paginaWeb' => 'website',
            'facebook' => 'facebook',
            'instagram' => 'instagram',
            'twitter' => 'twitter',
            'apertura' => 'time_begin',
            'cierre' => 'time_end',
            'propietario' => 'cluber_id',
            'comuna' => 'commune_id',
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
            'description' => 'descripcion',
            'address' => 'direccion',
            'lat' => 'latitud',
            'lng' => 'longitud',
            'website' => 'paginaWeb',
            'facebook' => 'facebook',
            'instagram' => 'instagram',
            'twitter' => 'twitter',
            'time_begin' => 'apertura',
            'time_end' => 'cierre',
            'cluber_id' => 'propietario',
            'commune_id' => 'comuna',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizacion',
            'deleted_at' => 'fechaEliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
