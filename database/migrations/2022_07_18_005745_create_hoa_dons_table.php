<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('hoa_dons', function (Blueprint $table) {
            $table->id();
            $table->string('ho_va_ten');
            $table->string('email');
            $table->date('ngay_bat_dau');
            $table->date('ngay_ket_thuc');
            $table->string('so_phong_dat');
            $table->integer('loai_phong_dat');
            $table->integer('tong_tien')->default(0);
            $table->integer('thanh_toan')->default(0)->comment('Thanh Toán và Chưa Thanh Toán');
            $table->integer('xep_phong')->default(0)->comment('Lock Phòng và Chưa Lock Phòng');;
            $table->integer('tien_coc')->default(0)->comment('Cọc tiền và chưa cọc tiền');;
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('hoa_dons');
    }
};
