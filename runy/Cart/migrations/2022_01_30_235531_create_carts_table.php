<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{

    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('session_id')->nullable();
            $table->string('name')->nullable();
            $table->string('family')->nullable();
            $table->string('cell' , 11)->nullable();
            $table->string('note_customer')->nullable();
            $table->string('address')->nullable();
            $table->string('zip_code' , 45)->nullable();
            $table->string('discount_id')->nullable();  /// ایدی تخفیف
            $table->string('type_cart' , 50)->default('خریدمحصول')->nullable(); // خریدمحصول یا خریدخدمات و یا خریدفایل یا خریدشناورمحصول یا خریدشناورخدمات... // service - dl-product - ...
            $table->string('user_id')->nullable(); // ایدی کاربری که این سبد به نام اون خرید می شود
            $table->bigInteger('seller_id')->nullable(); // ایدی کارمند فروشنده در مواقعی که فروش حضوری یا توسط کارمند فروش ثبت می شود
            $table->string('status',25)->default('in_process'); // in_process  - being_packaged - ready_to_send - posted - delivered - defective_information - lack_of_goods - returned - 'apply'
            $table->string('price')->nullable()->comment('قیمت بدون تخفیف');
            $table->string('total_price')->nullable();
            $table->string('acc_status' , 30)->default('پرداخت نشده');
            $table->boolean('discount_type')->default(0)->comment('0 percent | 1 const ');
            $table->integer('discount_amount')->default(0)->comment('مقدار درصد یا ثابت');
            $table->string('currency' , 22)->default('تومان')->comment('واحد پولی کلی که بروی سبد خرید اعمال شده');
            $table->enum('how_to_order' , ['حضوری' , 'آنلاین' , 'تلفنی'])->default('آنلاین')->comment('نحوه سفارش');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
