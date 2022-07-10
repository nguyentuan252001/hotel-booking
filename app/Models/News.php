<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    protected $fillable = [
        'tieu_de',
        'slug',
        'mo_ta',
        'noi_dung',
        'is_open',
        'hinh_anh',
    ];
}
