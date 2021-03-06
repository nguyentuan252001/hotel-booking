<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateGiaPhongRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id_phong'  => 'required|exists:phongs,id',
            'gia_phong' => 'required|numeric|min:0',
            'day_begin' => 'required|date',
            'day_end'   => 'required|date|after_or_equal:day_begin',
            'is_open'   => 'required|boolean',
        ];
    }
}
