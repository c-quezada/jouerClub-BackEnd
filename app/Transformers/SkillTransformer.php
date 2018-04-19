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
            'fechacreacion' => (string)$skill->created_at,
            'fechaactualizacion' => (string)$skill->updated_at,
            'fechaeliminacion' => isset($skill->deleted_at) ? (string)$skill->deleted_at : null,

            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('skills.show', $skill->id),
                ],
            ]
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identificador' => 'id',
            'nombre' => 'name',
            'descripcion' => 'description',
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
            'createdat' => 'fechacreacion',
            'updatedat' => 'fechaactualizacion',
            'deletedat' => 'fechaeliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
