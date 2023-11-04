<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type' ,['province' , 'country' , 'city'])->default('city');
            $table->integer('country_id')->default(0);
            $table->integer('province_id')->default(0);
            $table->integer('city_id')->default(0);
            $table->string('slug')->nullable();
            $table->timestamps();
        });

        DB::table('regions')->insert([
            'name'=> 'ایران' ,
            'type'=> 'country' ,
            'slug'=> 'ایران' ,
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('regions');
    }
};
