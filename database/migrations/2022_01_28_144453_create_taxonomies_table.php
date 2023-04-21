<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxonomiesTable extends Migration
{

    public function up()
    {
        Schema::create('taxonomies', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable(); // پست یا محصول و یا ..
            $table->bigInteger('type_id')->nullable(); //  آیدی محصول یا پست
            $table->string('item')->nullable();  // دستبندی یا برچسب و ...
            $table->bigInteger('item_id')->nullable();  // آیدی دستبندی یا برچسب
            $table->boolean('is')->default(false);  // هست / نیست
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('taxonomies');
    }
}
