<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderB5STable extends Migration
{

    public function up()
    {
        Schema::create('slider_b5_s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('user_id');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('slider_b5_s');
    }
}
