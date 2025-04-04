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
            $table->string('name_en')->nullable();
            $table->date('date_publish')->nullable(); // تاریخ نمایش پست
            $table->longText('texts')->nullable();
            $table->longText('technical_info')->nullable();
            $table->longText('shortDescription')->nullable();
            $table->string('pic')->nullable();
            $table->enum('statusPublish', ['forCheck' , 'draft' ,'publish'])->default('draft');
            $table->integer('specialPin')->default('0');  /// هر عدد یه معنی : 0 معمولی - 1 خاص و پین شده
            $table->enum('formatProduct' , ['normal','show','varPro','gallery','dl-video','dl-file','service'])->default('normal');  /// فرمت نمایش پست را نشان می دهد
            $table->bigInteger('price')->nullable();  // قیمت محصول
            $table->bigInteger('specialPrice')->nullable();  // قیمت ویژه محصول
            $table->integer('input_stock')->nullable();  // موجودی
            $table->enum('current' , ['T' , 'R', '$', 'TRY', 'AED', '€'])->default('T');
            $table->string('focusKeyword')->nullable();
            $table->string('titleSeo')->nullable();
            $table->string('descriptionSeo')->nullable();
            $table->integer('numberView')->nullable();  // آمار بازدید این مطلب
            $table->string('slug')->unique()->nullable();
            $table->string('redirect')->nullable();
            $table->string('action_periodic')->nullable(); // دوره ای که عملی باید انجام شود
            $table->integer('number_of_days_to_expiry')->nullable(); //  انقضای خدمت بعد از زمان خرید به تعداد روز  محاسبه می شود
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('like_product')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
