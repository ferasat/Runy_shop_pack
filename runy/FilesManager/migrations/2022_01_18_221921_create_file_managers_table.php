<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileManagersTable extends Migration
{
    public function up()
    {
        Schema::create('file_managers', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable(); // کاربری که آپلودش کرده
            $table->string('filename'); //  نام فایل
            $table->string('where')->nullable(); //  کدام بخش ؟ - post or page
            $table->integer('where_id')->nullable()->index(); // برای چه بخشی آپلود شده است
            $table->string('path')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('file_managers');
    }
}
