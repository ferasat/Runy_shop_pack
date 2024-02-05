<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('cart_bank_payment_gateways', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('نام درگاه بانکی');
            $table->string('api_key')->nullable();
            $table->string('token')->nullable()->comment('merchant - gateway_id - terminal_id');
            $table->string('username')->nullable();
            $table->string('password')->nullable()->comment('secret_key - ');
            $table->string('callback_url')->nullable();
            $table->string('sandbox')->nullable();
            $table->string('description')->nullable();
            $table->string('use_sign')->nullable();
            $table->string('callback_method')->default('POST');
            $table->string('type')->nullable()->comment('mode');  // sandbox
            $table->boolean('set_default')->default(0)->comment('درگاه اصلی');  //
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('cart_bank_payment_gateways');
    }
};
