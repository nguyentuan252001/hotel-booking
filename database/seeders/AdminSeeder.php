<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{

    public function run()
    {

        DB::table('admins')->delete();
        DB::table('admins')->truncate();

        DB::table('admins')->insert([
            [
                'ho_va_ten' => 'Nguyễn Tuân',
                'email' => 'tuanguyen2522001@gmail.com',
                'password' => bcrypt('123456789'),
                'so_dien_thoai' => 123456789,
                'is_master' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'ho_va_ten' => 'Nguyễn Văn',
                'email' => 'vanguyen2522001@gmail.com',
                'password' => bcrypt('123456789'),
                'so_dien_thoai' => 123456789,
                'is_master' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
