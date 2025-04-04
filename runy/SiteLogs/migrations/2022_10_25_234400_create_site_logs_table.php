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
            $table->string('type')->nullable()->comment(' - سرویس - خرید ...');
            $table->string('type_id')->nullable()->comment(' - سرویس - خرید ...');
            $table->string('event')->nullable();
            $table->string('causer_id')->nullable(); /// عامل این تغییر یا لاگ
            $table->string('user_ip')->nullable();
            $table->string('format' , 25)->default('text')->comment('text or json or ..');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('site_logs');
    }
}
