<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customer_logs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_id');
            $table->string('full_name')->nullable();
            $table->string('department')->nullable();
            $table->string('log_subject')->nullable();
            $table->longText('note')->nullable();
            $table->date('date')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_logs');
    }
};
