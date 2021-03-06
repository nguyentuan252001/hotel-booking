<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateChiTietPhongRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id'        => 'required|exists:chi_tiet_phongs,id',
            'id_phong' => 'required|exists:phongs,id',
            'ten_phong' => 'required|unique:chi_tiet_phongs,ten_phong,',
            'is_open' => 'required|boolean',
            'noi_that' => 'required',
        ];
    }
}
