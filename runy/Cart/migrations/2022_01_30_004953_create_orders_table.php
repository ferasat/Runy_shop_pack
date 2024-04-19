<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cart_id');
            $table->bigInteger('session_id')->nullable();
            $table->bigInteger('product_id')->nullable();
            $table->string('product_name')->nullable();  //
            $table->string('product_format')->default('normal');  // 'normal','show','varPro','gallery','dl-video','dl-file','service'
            $table->bigInteger('product_price')->nullable();  //  قیمت محصول
            $table->bigInteger('product_ps_price')->nullable(); //  قیمت فروش ویژه
            $table->integer('capacity')->nullable(); // ظرفیت محصول
            $table->integer('quantity')->nullable(); // تعداد محصول
            $table->string('currency' , 20)->default('T'); // تعداد محصول
            $table->bigInteger('sum')->nullable();
            $table->bigInteger('benefit')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
