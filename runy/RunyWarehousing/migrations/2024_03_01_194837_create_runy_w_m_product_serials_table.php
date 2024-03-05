<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('runy_w_m_product_serials', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('wm_product_id');
            $table->bigInteger('price');
            $table->bigInteger('serial')->unique()->nullable(); // سریال تولید شده
            $table->string('barcode_png')->nullable(); //
            $table->string('barcode_svg')->nullable(); //
            $table->longText('barcode_svg_html')->nullable(); //
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('runy_w_m_product_serials');
    }
};
