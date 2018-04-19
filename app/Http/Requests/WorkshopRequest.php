<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkshopRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'        => 'required',
            'description' => 'required',
            'lat'         => 'required',
            'lng'         => 'required',
            'time_begin'   => 'required',
            'time_end'     => 'required',
            'status'      => 'required',
            'coach_id'     => 'required'
        ];
    }
}