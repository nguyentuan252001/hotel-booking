<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateKhuVucRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ma_khu'        =>  'required|unique:khu_vucs,ma_khu|max:10',
            'ten_khu'       =>  'required|min:4|max:20',
            'mo_ta'         =>  'required',
            'tinh_trang'    =>  'required|boolean',
        ];
    }
}
