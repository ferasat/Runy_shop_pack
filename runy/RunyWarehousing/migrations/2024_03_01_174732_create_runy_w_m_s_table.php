<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('runy_w_m_s', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('type')->nullable();
            $table->string('place')->nullable();
            $table->integer('capacity')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('runy_w_m_s');
    }
};
