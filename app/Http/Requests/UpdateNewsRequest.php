<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id'    => 'required|exists:news,id',
            'tieu_de' => 'required|min:5|max:100',
            'slug' => 'required|min:5|max:100',
            'mo_ta' => 'required|min:5|max:500',
            'noi_dung' => 'required|min:10',
            'is_open' => 'required|boolean',
            'hinh_anh' => 'required',
        ];
    }
}
