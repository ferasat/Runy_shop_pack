<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('send_messages', function (Blueprint $table) {
            $table->id();
            $table->string('subject')->nullable();
            $table->enum('type_action', ['periodic' , 'once'])->default('once')->nullable();
            $table->enum('type_item', ['product' , 'service' ,'manual'])->default('manual')->nullable();
            $table->bigInteger('type_id')->nullable();
            $table->longText('text_sms')->nullable();
            $table->longText('text_email')->nullable();
            $table->date('date_first_send')->nullable();
            $table->bigInteger('customer_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('send_messages');
    }
};
