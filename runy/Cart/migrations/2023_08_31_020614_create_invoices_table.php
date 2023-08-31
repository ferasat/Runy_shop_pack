<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('subject')->nullable()->comment('مثلا : تور کیش 4 روزه - 4 نفر');
            $table->bigInteger('reservation_id')->nullable()->comment('آیدی رزرو');
            $table->string('type')->nullable()->comment('tour , hotel , fly abs_dom,abs_fly_dom, abs_int,abs_fly_int, abs_visa, abs_insure, abs_cancel_reserve, abs_oneDay');
            $table->string('item_id')->nullable()->comment('id tour ,  id hotel ,  id fly , id reserve');
            $table->bigInteger('counter_id')->nullable()->comment('کانتر صادر کننده فاکتور');
            $table->string('owner')->nullable()->comment('نام کسی که باید به نام او صادر شود - درخواست کننده تراکنش');
            $table->bigInteger('passenger_id')->nullable()->comment('کابر درخواست کننده تراکنش');
            $table->longText('description')->nullable()->comment('توضحات می تونه بصورت html بهم ذخیره بشود');
            $table->integer('status' )->nullable()->comment('وضعیت فاکتور : پرداخت شده 2 - پرداخت نشده1 - لغو0 -- 3تاییدشده -- 4کارت به کارت شده');
            $table->bigInteger('amount')->nullable()->comment('قیمت');
            $table->bigInteger('transaction_id')->nullable()->comment('در صورت عملیات پرداخت آی دی تراکنش را نمایش می دهد');
            $table->bigInteger('bita_absentbuy_pays_id')->nullable()->comment('در صورت عملیات پرداخت آی دی تراکنش را نمایش می دهد');
            $table->bigInteger('invoice_number')->nullable()->comment('شماره فاکتور');
            $table->boolean('contract_rules')->default(0)->comment('تایید خواندن قوانین و مقررات قرارداد : 1:خوانده شده و تایید شده - 0: تایید نشده');
            $table->date('contract_accept_time')->nullable()->comment('زمان تایید قرارداد');
            $table->date('pay_time')->nullable()->comment('زمان پرداخت قرارداد');
            $table->enum('active' , ['active' , 'inactive'])->default('active')->comment('قابل پرداخت یا غیر قابل پرداخت یا فعال و غیر فعال کردن فاکتور');
            $table->string('inactiveTime' )->default('15')->comment('زمان غیرفعال کردن فاکتور');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
