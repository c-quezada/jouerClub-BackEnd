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
            'timebegin'  => 'required|',
            'timeend'    => 'required',
            'status'     => 'required',
            'courtid'    => 'required|numeric'
        ];
    }
}