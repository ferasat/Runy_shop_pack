<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date_publish')->nullable(); // تاریخ نمایش پست
            $table->longText('texts')->nullable();
            $table->longText('technical_info')->nullable();
            $table->longText('shortDescription')->nullable();
            $table->string('pic')->nullable();
            $table->enum('statusPublish', ['forCheck' , 'draft' ,'publish'])->default('draft')->nullable();
            $table->integer('specialPin')->default('0');  /// هر عدد یه معنی : 0 معمولی - 1 خاص و پین شده
            $table->enum('formatProduct' , ['normal','show','varPro','gallery','dl-video','dl-file'])->default('normal');  /// فرمت نمایش پست را نشان می دهد
            $table->bigInteger('price')->nullable();  // قیمت محصول
            $table->bigInteger('specialPrice')->nullable();  // قیمت ویژه محصول
            $table->integer('input_stock')->nullable();  // موجودی
            $table->enum('current' , ['T' , 'R', '$', 'E'])->nullable();
            $table->string('focusKeyword')->nullable();
            $table->string('titleSeo')->nullable();
            $table->integer('numberView')->nullable();  // آمار بازدید این مطلب
            $table->string('slug')->unique()->nullable();
            $table->string('redirect')->nullable();
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
