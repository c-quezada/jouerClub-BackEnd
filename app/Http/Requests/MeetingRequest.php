<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MeetingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'time_begin'  => 'required',
            'time_end'    => 'required',
            'status'      => 'required',
            'court_id'    => 'required|numeric',
            'jouer_id'    => 'required|numeric'
        ];
    }
}