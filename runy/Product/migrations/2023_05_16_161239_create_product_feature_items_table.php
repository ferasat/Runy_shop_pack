<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_feature_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id');
            $table->bigInteger('product_feature_id');
            $table->string('name');
            $table->string('value')->nullable();
            $table->text('description')->nullable();
            $table->integer('add_price')->nullable();
            $table->timestamps();
        });

        DB::table('product_feature_items')->insert([
            'product_id'=> 1,
            'product_feature_id'=> 1,
            'name' => 'Color',
            'value' => 'Black',
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('product_feature_items');
    }
};
