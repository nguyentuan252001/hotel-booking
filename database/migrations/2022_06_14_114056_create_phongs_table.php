<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('phongs', function (Blueprint $table) {
            $table->id();
            $table->string('ma_phong');
            $table->integer('gia_mac_dinh');
            $table->longText('mo_ta_phong');
            $table->text('hinh_anh');
            $table->integer('tinh_trang');
            $table->integer('khu_vuc_id');
            $table->integer('so_khach');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('phongs');
    }
};
