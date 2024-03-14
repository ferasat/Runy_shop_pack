<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountingsTable extends Migration
{
    public function up()
    {
        Schema::create('accountings', function (Blueprint $table) {
            $table->id();
            $table->string('statement_id')->unique();
            $table->string('statement_name');
            $table->enum('statement_type',['هردو','بدهکار','بستانکار'])->nullable();
            $table->enum('item_type',['کارمند','مشتری','مشتری عمده','مرجع خرید','بانک','صرافی','همکاری'])->nullable(); // در همکاری ، طرف حساب هم مشتری هست و هم تامین کننده یعنی دو طرفه است
            $table->integer('item_id')->nullable(); // مثلا آیدی کاربر
            $table->bigInteger('credit')->nullable()->comment('اعتبار شارژ طرف حساب');  // اعتبار شارژ طرف حساب
            $table->bigInteger('credit_limit')->nullable()->comment('محدوده اعتبار');  // اعتبار  شارژ طرف حساب
            $table->string('software_code')->unique()->nullable()->comment('شناسه نرم افزار حسابداری');
            $table->string('vat_id')->unique()->nullable()->comment('شناسه مالیاتی');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accountings');
    }
}
