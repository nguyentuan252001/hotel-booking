<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admins';

    protected $fillable = [
        'ho_va_ten',
        'email',
        'passwork',
        'so_dien_thoai',
        'is_master',
        'list_rules',
    ];
}
