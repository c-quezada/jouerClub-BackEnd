<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SportFieldRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'       => 'required|max:100|min:4',
            'address'    => 'required|min:10',
            'lat'        => 'required',
            'lng'        => 'required',
            'time_begin' => 'required',
            'time_end'   => 'required',
            'cluber_id'  => 'required|numeric'
        ];
    }
}
