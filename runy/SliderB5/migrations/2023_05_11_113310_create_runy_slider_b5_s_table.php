<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('runy_slider_b5_s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('text')->nullable();
            $table->string('urlpic')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->timestamps();
        });

        DB::table('runy_slider_b5_s')->insert([
            'name' => 'تست اول',
            'text' => 'تست اول',
            'slug' => 'test1',
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('runy_slider_b5_s');
    }
};
