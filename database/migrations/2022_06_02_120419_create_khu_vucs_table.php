<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('khu_vucs', function (Blueprint $table) {
            $table->id();
            $table->string('ma_khu')->unique();
            $table->string('ten_khu');
            $table->longText('mo_ta');
            $table->integer('tinh_trang')->comment('0: Đóng, 1: Mở, 2: Sửa Chữa');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('khu_vucs');
    }
};
