<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRqstsTable extends Migration
{

    public function up()
    {
        Schema::create('rqsts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');  // کاربر ایجاد کننده
            $table->string('name')->nullable();
            $table->string('for_id')->nullable();  // برای کاربر مخاطب قرار گرفته
            $table->string('for_department_id')->nullable();  // برای بخش مخاطب قرارگرفته
            $table->string('sponsor_id')->nullable(); // کاربر تعهد کننده یا مسئول پاسخ دهی
            $table->string('type')->nullable();  // نوع درخواست مثلا مرخصی -اضافه کار و ...
            $table->string('status')->nullable();
            $table->boolean('active')->default(1);
            $table->longText('note')->nullable();
            $table->json('files')->nullable();
            $table->string('rqs_code' , 10)->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('rqsts');
    }
}
