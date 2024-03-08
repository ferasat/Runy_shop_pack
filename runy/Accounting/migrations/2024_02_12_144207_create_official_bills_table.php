<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficialBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('official_bills', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('re_id')->nullable();

            $table->string('customer_name')->nullable();
            $table->bigInteger('customer_economical_number')->nullable();
            $table->text('customer_address')->nullable();
            $table->bigInteger('customer_codePosti')->nullable();
            $table->bigInteger('customer_codeMeli')->nullable();
            $table->bigInteger('customer_cell')->nullable();

            $table->string('seller_s_name')->nullable();
            $table->bigInteger('seller_s_economical_number')->nullable();
            $table->text('seller_s_address')->nullable();
            $table->bigInteger('seller_s_codePosti')->nullable();
            $table->bigInteger('seller_s_codeMeli')->nullable();
            $table->bigInteger('seller_s_cell')->nullable();

            $table->longText('orders')->nullable();
            $table->bigInteger('total_price')->nullable();//جمع کل فروش
            $table->bigInteger('tax')->nullable();//مالیات
            $table->bigInteger('total_price_with_tax')->nullable();  //جمع کل فروش با مالیات
            $table->bigInteger('discount_amount')->nullable(); //مقدار تخفیف
            $table->bigInteger('discount_type')->nullable();//نوع تخفیف
            $table->bigInteger('final_total_price')->nullable();//جمع کل پرداختی

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('official_bills');
    }
}
