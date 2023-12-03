<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('runy_form_builders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type')->default('public')->comment('service - product - contact us- ....'); /// همون where
            $table->string('type_id')->nullable();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('runy_form_builders');
    }
};
