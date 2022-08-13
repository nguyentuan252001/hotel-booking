<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('password');
            $table->string('phone');
            $table->string('is_active')->default(0)->comment('0: Chưa kích hoạt, 1: Đã kích hoạt');
            $table->string('hash_active')->nullable()->comment('Mã dùng để kích hoạt tài khoản');
            $table->string('hash_reset')->nullable()->comment('Mã dùng để reset mật khẩu');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
