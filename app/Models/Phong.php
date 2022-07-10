<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
    use HasFactory;

    protected $table = 'phongs';

    protected $fillable = [
        'ma_phong',
        'gia_mac_dinh',
        'mo_ta_phong',
        'hinh_anh',
        'tinh_trang',
        'khu_vuc_id',
        'so_khach',
    ];
}
