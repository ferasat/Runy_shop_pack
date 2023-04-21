<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('sub_requests', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('rqsts_id'); // آیدی درخواست اصلی
            $table->bigInteger('user_id'); // ایدی کاربر بوجود آورنده
            $table->longText('text'); // متن پاسخ
            $table->json('files')->nullable(); //
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sub_requests');
    }
}
