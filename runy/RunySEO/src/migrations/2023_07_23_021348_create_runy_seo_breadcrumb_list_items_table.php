<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRunySeoBreadcrumbListItemsTable extends Migration
{

    public function up()
    {
        Schema::create('runy_seo_breadcrumb_list_items', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['Corporation' ,'Brand' , 'n' , 'p'])->default('n');
            $table->integer('position')->nullable();
            $table->string('name')->nullable();
            $table->string('url')->nullable();
            $table->bigInteger('runy_seo_meta_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('runy_seo_breadcrumb_list_items');
    }
}
