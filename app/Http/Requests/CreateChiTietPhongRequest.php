<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateChiTietPhongRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'id_phong' => 'required|exists:phongs,id',
            'ten_phong' => 'required|unique:chi_tiet_phongs,ten_phong,',
            'is_open' => 'required|boolean',
            'noi_that' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'id_phong*' => 'Id phải được nhập',
            'ten_phong*' => 'Phải nhập tên phòng',
            'is_open*' => 'Vui lòng chọn Trạng thái',
            'noi_that*' => 'Vui lòng nhập nội thất',
        ];
    }
}
