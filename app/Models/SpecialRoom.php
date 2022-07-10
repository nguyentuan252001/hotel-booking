<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialRoom extends Model
{
    use HasFactory;

    protected $table = 'special_rooms';

    protected $fillable = [
        'id_phong',
        'gia_phong',
        'day_begin',
        'day_end',
        'is_open',
    ];
}
