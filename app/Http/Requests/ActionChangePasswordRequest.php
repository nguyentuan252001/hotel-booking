<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActionChangePasswordRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'password' => 'required|min:6|max:30',
            're_password' => 'required|same:password',
            'hash_reset'    =>  'required|exists:customers,hash_reset',
        ];
    }

    public function messages()
    {
        return [
            'password.*'      =>  'Mật khẩu phải từ 6 đến 30 ký tự',
            're_password.*'   =>  'Mật khẩu nhập lại phải giống mật khẩu',
            'hash_reset.*'    =>  'Mã reset tài khoản không tồn tại!',
        ];
    }
}
