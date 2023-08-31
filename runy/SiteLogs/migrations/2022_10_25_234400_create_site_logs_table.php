<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteLogsTable extends Migration
{

    public function up()
    {
        Schema::create('site_logs', function (Blueprint $table) {
            $table->id();
            $table->string('log_name');
            $table->text('description')->nullable();
            $table->string('type')->nullable()->comment('هتل - تور - رزرواسیون ...');
            $table->integer('type_id')->nullable()->comment('هتل - تور - رزرواسیون ...');
            $table->string('event')->nullable();
            $table->string('causer_id')->nullable(); /// عامل این تغییر یا لاگ
            $table->string('user_ip')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('site_logs');
    }
}
