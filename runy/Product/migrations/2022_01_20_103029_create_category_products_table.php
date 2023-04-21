<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryProductsTable extends Migration
{

    public function up()
    {
        Schema::create('category_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->longText('description')->nullable();
            $table->enum('statusMaster' , ['yes' , 'no'])->default('yes');
            $table->integer('master_id')->default(0); // آیدی سر دسته در صورتی که خودش سر دسته است 0 می شود.
            $table->string('focusKeyword')->nullable(); // عبارت کلیدی کانونی
            $table->string('titleSeo')->nullable(); // عنوان سئو
            $table->string('metaDescription')->nullable(); // توضیح متا
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('category_products');
    }
}
