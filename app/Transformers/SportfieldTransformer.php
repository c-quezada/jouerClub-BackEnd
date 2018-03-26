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
            'descripcion' => (string)$sportfield->description,
            'direccion' => (string)$sportfield->address,
            'latitud' => (string)$sportfield->lat,
            'longitud' => (string)$sportfield->lng,
            'pagina_web' => (string)$sportfield->website,
            'facebook' => (string)$sportfield->facebook,
            'instagram' => (string)$sportfield->instagram,
            'twitter' => (string)$sportfield->twitter,
            'inicio' => (string)$sportfield->time_begin,
            'termino' => (string)$sportfield->time_end,
            'dueño' => (int)$sportfield->cluber_id,
            'comuna' => (int)$sportfield->commune_id,
            'fecha_creacion' => (string)$sportfield->created_at,
            'fecha_actualizacion' => (string)$sportfield->updated_at,
            'fecha_eliminacion' => isset($sportfield->deleted_at) ? (string)$sportfield->deleted_at : null,

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
            'descripcion' => 'description',
            'direccion' => 'address',
            'latitud' => 'lat',
            'longitud' => 'lng',
            'pagina_web' => 'website',
            'facebook' => 'facebook',
            'instagram' => 'instagram',
            'twitter' => 'twitter',
            'inicio' => 'time_begin',
            'termino' => 'time_end',
            'dueño' => 'cluber_id',
            'comuna' => 'commune_id',
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
            'description' => 'descripcion',
            'address' => 'direccion',
            'lat' => 'latitud',
            'lng' => 'longitud',
            'website' => 'pagina_web',
            'facebook' => 'facebook',
            'instagram' => 'instagram',
            'twitter' => 'twitter',
            'time_begin' => 'inicio',
            'time_end' => 'termino',
            'cluber_id' => 'dueño',
            'commune_id' => 'comuna',
            'created_at' => 'fecha_creacion',
            'updated_at' => 'fecha_actualizacion',
            'deleted_at' => 'fecha_eliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}