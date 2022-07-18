<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhuVucSeeder extends Seeder
{

    public function run()
    {
        DB::table('khu_vucs')->delete();

        DB::table('khu_vucs')->truncate();

        DB::table('khu_vucs')->insert([
            ['ma_khu' => 'DN001', 'ten_khu' => 'Khu A', 'mo_ta' => 'Khu Vực Hướng Ra Biển', 'tinh_trang' => 1],
            ['ma_khu' => 'DN002', 'ten_khu' => 'Khu B', 'mo_ta' => 'Khu Vực Hướng Ra Vườn', 'tinh_trang' => 1],
            ['ma_khu' => 'DN003', 'ten_khu' => 'Khu C', 'mo_ta' => 'Khu Vực Hướng Lên Đảo', 'tinh_trang' => 1],
            ['ma_khu' => 'DN004', 'ten_khu' => 'Khu D', 'mo_ta' => 'Khu Vực Vui Chơi Cho Trẻ em', 'tinh_trang' => 1],
            ['ma_khu' => 'DN005', 'ten_khu' => 'Khu E', 'mo_ta' => 'Khu Vực Cho Người Cao Tuổi', 'tinh_trang' => 1],
            ['ma_khu' => 'DN006', 'ten_khu' => 'Khu F', 'mo_ta' => 'Khu Vực Hoạt Động Xuyên Đêm', 'tinh_trang' => 1],
        ]);
    }
}
