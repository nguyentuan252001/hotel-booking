<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('chi_tiet_phongs', function (Blueprint $table) {
            $table->id();
            $table->integer('id_phong');
            $table->string('ten_phong')->unique();
            $table->integer('is_open')->default(1)->comment('1: Đang có thể bán, 0: Không thể bán');
            $table->text('noi_that');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chi_tiet_phongs');
    }
};
