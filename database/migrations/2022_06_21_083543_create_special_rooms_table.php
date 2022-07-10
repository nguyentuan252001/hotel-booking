<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('special_rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('id_phong');
            $table->integer('gia_phong');
            $table->dateTime('day_begin');
            $table->dateTime('day_end');
            $table->integer('is_open')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('special_rooms');
    }
};
