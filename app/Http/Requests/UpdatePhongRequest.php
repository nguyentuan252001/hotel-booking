<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePhongRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id'            =>  'required|exists:phongs,id',
            'ma_phong'      =>  'required|unique:phongs,id',
            'gia_mac_dinh'  =>  'required|numeric|min:0',
            'tinh_trang'    =>  'required|numeric|min:0|max:2',
            'mo_ta_phong'   =>  'required',
            'hinh_anh'      =>  'required',
            'khu_vuc_id'    =>  'required|exists:khu_vucs,id',
            'so_khach'      =>  'required|numeric|min:1',
        ];
    }
}
