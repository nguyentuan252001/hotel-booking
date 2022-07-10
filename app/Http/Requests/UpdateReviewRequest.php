<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReviewRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id' => 'required|exists:reviews,id',
            'name' => 'required|min:5',
            'city' => 'required|min:5',
            'rate' => 'required|min:0|max:5',
            'content' => 'required|min:5',
            'avatar' => 'required|',
        ];
    }
}
