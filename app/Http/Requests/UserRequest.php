<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'     => 'alpha|required|max:25|min:4',
            'lastname' => 'alpha|required|max:25|min:6',
            'nickname' => 'required|max:30|min:unique',
            'email'    => 'email|unique:users,email,',
            'password' => 'required|min:6|confirmed'
        ];
    }
}