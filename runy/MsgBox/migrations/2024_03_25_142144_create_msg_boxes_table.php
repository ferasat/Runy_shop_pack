<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('msg_boxes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type' , ['email' , 'sms' , 'push' , 'notify', 'ads']);
            $table->enum('importance' , ['low' , 'normal' , 'high'])->default('low');
            $table->string('status')->nullable();
            $table->string('description')->nullable();
            $table->bigInteger('creator_user_id')->nullable(); /// چه کاربری این را ایجاد کرده
            $table->string('for_user_name')->nullable(); // نام مشتری که برای ارسال میشه
            $table->bigInteger('for_user_id')->nullable(); // برای چه مشتری ارسال شده اگر عضو هست
            $table->string('for_item' , 20)->nullable()->comment('Auth - login - payment - cart - comment - club'); // برای چه کاری این پیم ارسال شد
            $table->bigInteger('for_item_id')->nullable()->comment('invoice_id - cart_id '); // برای چه کاری این پیم ارسال شد
            $table->string('item_communication')->nullable(); //اگر ایمیل بود ادرس ایمیل و اگر پیام بود شماره موبایل
            $table->string('attach_file')->nullable(); //اگر ایمیل بود ادرس ایمیل و اگر پیام بود شماره موبایل
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('msg_boxes');
    }
};
