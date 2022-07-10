<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietPhong extends Model
{
    use HasFactory;

    protected $table  = 'chi_tiet_phongs';

    protected $fillable = [
        'id_phong',
        'ten_phong',
        'is_open',
        'noi_that',
    ];
}
