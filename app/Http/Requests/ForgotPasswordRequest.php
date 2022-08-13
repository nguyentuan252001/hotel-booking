<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForgotPasswordRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'email'     =>  'required|email|exists:customers,email',

        ];
    }

    public function messages()
    {
        return [
            'email.*'   =>  'Email không đúng định dạng hoặc không tồn tại!',
        ];
    }
}
