<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('runy_slider_pics', function (Blueprint $table) {
            $table->id();
            $table->string('runy_slider_id')->index();
            $table->string('name')->nullable();
            $table->string('text')->nullable();
            $table->string('urlpic');
            $table->string('link')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('runy_slider_pics');
    }
};
