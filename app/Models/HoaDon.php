<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use HasFactory;
    protected $table = 'hoa_dons';
    protected $fillable = [
        'ho_va_ten',
        'email',
        'ngay_bat_dau',
        'ngay_ket_thuc',
        'so_phong_dat',
        'loai_phong_dat',
        'tong_tien',
        'thanh_toan',
        'xep_phong',
        'tien_coc',
    ];
}
