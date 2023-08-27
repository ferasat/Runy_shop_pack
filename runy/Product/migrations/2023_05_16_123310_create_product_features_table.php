<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_features', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id');
            $table->string('name');
            $table->timestamps();
        });

        DB::table()->insert([
            'product_id'=> 1,
            'name' => 'send message periodic'
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('product_features');
    }
};
