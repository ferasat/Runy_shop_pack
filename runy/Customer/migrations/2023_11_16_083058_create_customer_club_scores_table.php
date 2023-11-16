<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('customer_club_scores', function (Blueprint $table) {
            $table->id();
            $table->enum('score_type' , ['خرید محصول' , 'استفاده از خدمات' , 'شرکت در نظر سنجی' , 'متفرقه']); // خرید محصول - استفاده از خدمات - شرکت در نظر سنجی - غیره
            $table->bigInteger('type_id'); // ایدی مثلا محصولی که خریده
            $table->integer('score_value'); // مقدار امتیاز که بدست آورده
            $table->enum('score_status' , ['استفاده شده' , 'استفاده نشده', 'منقضی شده']); // استفاده شده - استفاده نشده - منقضی شده
            $table->date('score_expired'); // تا زمانی که میتونی ازش استفاده کنی
            $table->bigInteger('score_for_user_id'); // ایدی کاربری که این امتیاز را دریافت کرده است
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('customer_club_scores');
    }
};
