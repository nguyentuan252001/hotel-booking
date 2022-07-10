<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckIdPhongRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id'    =>  'required|exists:phongs,id',
        ];
    }

    public function messages()
    {
        return [
            'id.*'   =>  'Phòng không tồn tại!',
        ];
    }
}
