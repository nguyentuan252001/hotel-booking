<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhuVuc extends Model
{
    use HasFactory;

    protected $table = 'khu_vucs';

    protected $fillable = [
        'ma_khu',
        'ten_khu',
        'mo_ta',
        'tinh_trang',
    ];
}
