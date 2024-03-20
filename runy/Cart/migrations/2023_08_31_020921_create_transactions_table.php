<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('cart_id')->nullable();
            $table->string('payment_id' , 50)->nullable();
            $table->bigInteger('amount')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('paid')->nullable();
            $table->enum('status' , ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11'])->default(1)->comment('به درگاه پرداخت بستگی دارد');
            $table->bigInteger('invoice_id')->nullable();
            $table->string('uuid')->nullable()->comment('یک ایدی یونیک برای صورتحساب شتابیت تنظیم می‌کند.');
            $table->longText('invoice_details')->nullable();
            $table->bigInteger('transaction_id')->nullable();
            $table->longText('transaction_result')->nullable();
            $table->longText('transaction_note')->nullable();
            $table->longText('card_no')->nullable();
            $table->string('get_way' , 50)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
