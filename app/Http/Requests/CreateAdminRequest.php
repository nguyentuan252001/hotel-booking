<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAdminRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'ho_va_ten' => 'required|min:5',
            'email' => 'required|email|unique:admins,email,',
            'passwork' => 'required|min:6|max:30',
            're_passwork' => 'required|same:passwork',
            'so_dien_thoai' => 'required|digits:10|unique:admins,so_dien_thoai,',
            'is_master' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'ho_va_ten.*' => 'Họ và tên phải nhập ít nhất 5 kí tự',
            'email.*' => 'Vui lòng nhập đúng Email',
            'passwork.*' => 'Vui lòng nhập ít nhất 8 kí tự và tối đa 30 kí tự',
            're_passwork.*' => 'Nhập lại mật khẩu không chính xác',
            'so_dien_thoai.*' => 'Vui Lòng nhập đúng số điện thoại',
            'is_master.*' => 'Vui Lòng chọn loại Admin',
        ];
    }
}
