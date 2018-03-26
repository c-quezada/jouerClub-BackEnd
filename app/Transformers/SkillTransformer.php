<?php

namespace App\Transformers;

use App\Skill;
use League\Fractal\TransformerAbstract;

class SkillTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Skill $skill)
    {
        return [
            'identificador' => (int)$skill->id,
            'nombre' => (string)$skill->name,
            'descripcion' => (string)$skill->description,
            'fecha_creacion' => (string)$skill->created_at,
            'fecha_actualizacion' => (string)$skill->updated_at,
            'fecha_eliminacion' => isset($skill->deleted_at) ? (string)$skill->deleted_at : null,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identificador' => 'id',
            'nombre' => 'name',
            'descripcion' => 'description',
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
            'description' => 'descripcion'
            'created_at' => 'fecha_creacion',
            'updated_at' => 'fecha_actualizacion',
            'deleted_at' => 'fecha_eliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
