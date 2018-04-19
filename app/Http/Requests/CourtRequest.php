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
            'name'           => 'required|min:4', 
            'status'         => 'required|min:4', 
            'sportfieldid'   => 'required'
        ];
    }
}
