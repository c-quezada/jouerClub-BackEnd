<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourtRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'             => 'required|min:4',
            'status'           => 'required|min:4',
            'avatar'           => 'max:5000',
            'sport_field_id'   => 'required'
        ];
    }
}
