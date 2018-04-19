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
            'inicio' => (string)$sportfield->time_begin,
            'termino' => (string)$sportfield->time_end,
            'dueño' => (int)$sportfield->cluber_id,
            'comuna' => (int)$sportfield->commune_id,
            'fechacreacion' => (string)$sportfield->created_at,
            'fechaactualizacion' => (string)$sportfield->updated_at,
            'fechaeliminacion' => isset($sportfield->deleted_at) ? (string)$sportfield->deleted_at : null,

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
            'inicio' => 'timebegin',
            'termino' => 'timeend',
            'dueño' => 'cluberid',
            'comuna' => 'communeid',
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
            'description' => 'descripcion',
            'address' => 'direccion',
            'lat' => 'latitud',
            'lng' => 'longitud',
            'website' => 'paginaWeb',
            'facebook' => 'facebook',
            'instagram' => 'instagram',
            'twitter' => 'twitter',
            'timebegin' => 'inicio',
            'timeend' => 'termino',
            'cluberid' => 'dueño',
            'communeid' => 'comuna',
            'createdat' => 'fechacreacion',
            'updatedat' => 'fechaactualizacion',
            'deletedat' => 'fechaeliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
