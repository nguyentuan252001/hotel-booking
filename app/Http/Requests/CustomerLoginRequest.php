<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerLoginRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email'     =>  'required|email',
            'password'  =>  'required',
        ];
    }

    public function messages()
    {
        return [
            'email.*'       =>  'Email yêu cầu phải nhập',
            'password.*'    =>  'Password yêu cầu phải nhập',
        ];
    }
}
