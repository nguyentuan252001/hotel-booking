<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email'         =>  'required|email|unique:customers,email',
            'phone'         =>  'required|digits:10|unique:customers,phone',
            'password'      =>  'required|min:6|max:30',
            're_password'   =>  'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'email.*'       =>  'Email phải nhập và không được trùng',
            'phone.*'       =>  'Số điện thoại phải nhập và không được trùng',
            'password.*'    =>  'Mật khẩu phải từ 6 đến 30 ký tự',
            're_password.*' =>  'Mật khẩu nhập lại phải giống mật khẩu',
        ];
    }
}
