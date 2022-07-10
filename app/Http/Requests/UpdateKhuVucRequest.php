<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKhuVucRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id'            =>  'required|exists:khu_vucs,id',
            'ma_khu'        =>  'required|max:10,|unique:khu_vucs,ma_khu,' . $this->id,
            'ten_khu'       =>  'required|min:4|max:20',
            'mo_ta'         =>  'required',
            'tinh_trang'    =>  'required|boolean',
        ];
    }
}
