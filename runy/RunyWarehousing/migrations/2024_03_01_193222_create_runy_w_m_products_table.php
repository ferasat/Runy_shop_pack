<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('runy_w_m_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_en')->nullable();
            $table->longText('texts')->nullable();
            $table->string('pic')->nullable();
            $table->string('category')->nullable();
            $table->bigInteger('wm_id');  // runy_w_m_s -> id
            $table->enum('status', ['active' , 'disable' ])->default('active');
            $table->boolean('specialPin')->default('0');  /// هر عدد یه معنی : 0 معمولی - 1 خاص و پین شده
            $table->enum('formatProduct' , ['normal'])->default('normal');  /// فرمت نمایش پست را نشان می دهد
            $table->bigInteger('price')->nullable();  // قیمت محصول
            $table->integer('input_stock')->nullable();  // موجودی
            $table->enum('current' , ['تومان' , 'ریال', 'دلار', 'لیر', 'درهم امارات', 'یورو'])->default('تومان');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('runy_w_m_products');
    }
};
