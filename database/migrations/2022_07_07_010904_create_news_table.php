<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('tieu_de');
            $table->string('slug');
            $table->string('mo_ta');
            $table->longText('noi_dung');
            $table->integer('is_open');
            $table->longText('hinh_anh');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('news');
    }
};
