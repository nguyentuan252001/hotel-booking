<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePhongRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ma_phong'      =>  'required|unique:phongs,ma_phong',
            'gia_mac_dinh'  =>  'required|numeric|min:10000',
            'mo_ta_phong'   =>  'required',
            'tinh_trang'    =>  'required|numeric|min:0|max:2',
            'hinh_anh'      =>  'required',
            'khu_vuc_id'    =>  'required|exists:khu_vucs,id',
            'so_khach'      =>  'required|numeric|min:1',
        ];
    }

    public function messages()
    {
        return [
            'ma_phong.required'         => 'Mã phòng yêu cầu phải nhập',
            'gia_mac_dinh.required'     => 'Giá mặc định yêu cầu phải nhập',
            'mo_ta_phong.required'      => 'Mô tả phòng yêu cầu phải nhập',
            'tinh_trang.required'       => 'Tình trạng yêu cầu phải nhập',
            'hinh_anh.required'         => 'Hình ảnh yêu cầu phải nhập',
            'khu_vuc_id.required'       => 'Khu vực yêu cầu phải nhập',
            'ma_phong.unique'           => 'Mã phòng đã tồn tại',
            'gia_mac_dinh.numeric'      => 'Giá mặc định phải là số',
            'gia_mac_dinh.min'          => 'Giá mặc định tối thiểu phải 100.000đ',
            'tinh_trang.*'              => 'Tình trạng phải chọn trong option',
            'khu_vuc_id.exists'         => 'Khu vực không tồn tại',
            'so_khach.*'                => 'Số Lượng phải được nhập và lớn hơn 0',
        ];
    }
}
