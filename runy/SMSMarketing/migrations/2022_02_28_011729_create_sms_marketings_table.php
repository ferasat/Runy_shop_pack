<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsMarketingsTable extends Migration
{

    public function up()
    {
        Schema::create('sms_marketings', function (Blueprint $table) {
            $table->id();
            $table->string('name_panel');
            $table->string('api_url');
            $table->string('token')->nullable()->comment('ApiKey or ...');
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('sender_number_ads_1')->nullable()->comment('خطوط تبلیغاتی');
            $table->string('sender_number_ads_2')->nullable()->comment('خطوط تبلیغاتی');
            $table->string('sender_number_ads_3')->nullable()->comment('خطوط تبلیغاتی');
            $table->string('sender_number_ads_4')->nullable()->comment('خطوط تبلیغاتی');
            $table->string('sender_number_service_1')->nullable()->comment('خطوط خدماتی و اختصاصی');
            $table->string('sender_number_service_2')->nullable()->comment('خطوط خدماتی و اختصاصی');
            $table->string('sender_number_service_3')->nullable()->comment('خطوط خدماتی و اختصاصی');
            $table->string('sender_number_service_4')->nullable()->comment('خطوط خدماتی و اختصاصی');
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('sms_marketings');
    }
}
