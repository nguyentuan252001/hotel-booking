<?php

namespace Database\Seeders;

use App\Models\ChiTietPhong;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(KhuVucSeeder::class);
        $this->call(PhongSeeder::class);
        $this->call(ChiTietPhongSeeder::class);
    }
}
