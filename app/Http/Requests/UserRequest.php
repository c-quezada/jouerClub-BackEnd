<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //'name'            => 'alpha|required|max:25|min:4',
            //'lastname'        => 'alpha|required|max:25|min:6',
            'nickname'        => 'required|max:30|min:unique',
            'email'           => 'required|email|unique:users',
            'password'        => 'required|min:6',
            //'avatar'          => 'required|image',
            'type'            => 'required|min:4',
            'phone'           => 'required|min:9|max:11',
        ];
    }
}
