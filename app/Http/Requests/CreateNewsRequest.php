<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNewsRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'tieu_de' => 'required|min:5|max:100',
            'slug' => 'required|min:5|max:100',
            'mo_ta' => 'required|min:5|max:500',
            'noi_dung' => 'required|min:10',
            'is_open' => 'required|boolean',
            'hinh_anh' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'tieu_de' => 'Tiêu Đề Phải từ 5 đến 10 ký tự',
            'slug' => 'Slug Phải từ 5 đến 10 ký tự',
            'mo_ta' => 'Mô Tả Phải từ 5 đến 500 ký tự',
            'noi_dung' => 'Nội DUng ít nhất phải 10 ký tự',
            'is_open' => 'Tình  Trạng phải được chọn',
            'hinh_anh' => 'Hình ảnh phải được nhập'
        ];
    }
}
