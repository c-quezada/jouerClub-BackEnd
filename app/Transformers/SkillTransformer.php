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
            'ramaDeportiva' => (int)$skill->branch_id,
            'fechaCreacion' => (string)$skill->created_at,
            'fechaActualizacion' => (string)$skill->updated_at,
            'fechaEliminacion' => isset($skill->deleted_at) ? (string)$skill->deleted_at : null,

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
            'ramaDeportiva' => 'branch_id',
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
            'branch_id' => 'ramaDeportiva',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizacion',
            'deleted_at' => 'fechaEliminacion',
        ];
        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
