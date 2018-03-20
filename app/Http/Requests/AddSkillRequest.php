<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSkillRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [     
            //'user'     => 'required|unique:jouer_skill,jouer_id',
            'skills'      => 'required|unique:jouer_skill,skill_id'
        ];
    }
}
