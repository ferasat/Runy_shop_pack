<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{

    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->default('رانی شاپ');
            $table->string('site_url')->default('tarahsite.net');
            $table->string('dash_url')->default('runy.runyshop.ir');
            $table->boolean('have_ssl')->default('1');  // have ssl ?
            $table->string('site_short_description')->default('شعار سایت');
            $table->string('mobile_phone')->nullable();
            $table->string('office_phone')->nullable();
            $table->string('front_theme')->nullable()->comment('نام پوسته فرانت');
            $table->string('back_theme')->nullable()->comment('نام پوسته بک');
            $table->timestamps();
        });

        DB::table('settings')->insert([
            'site_name' => 'رانی شاپ' ,
            'site_url' => 'tarahsite.net' ,
            'dash_url' => 'runy.runyshop.ir' ,
            'site_short_description' => 'شعار سایت' ,
        ]);
    }


    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
