<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('acc_settings', function (Blueprint $table) {
            $table->id();
            $table->string('tax' , 50)->default(0);
            $table->enum('tax_calculation_type' , ['percentage' , 'fixed'])->default('percentage');
            $table->string('tax1' , 50)->default(0);
            $table->enum('tax1_calculation_type' , ['percentage' , 'fixed'])->default('percentage');
            $table->string('tax2' , 50)->default(0);
            $table->enum('tax2_calculation_type' , ['percentage' , 'fixed'])->default('percentage');
            $table->string('tax3' , 50)->default(0);
            $table->enum('tax3_calculation_type' , ['percentage' , 'fixed'])->default('percentage');
            $table->enum('default_currency' , ['تومان', 'ريال', 'دلار', 'درهم امارات', 'لیر', 'یورو', 'دلار استرالیا', 'بیتکوین', 'تتر', 'دوچ کوین', 'اتریوم', 'شیبا'])->default('تومان');
            $table->enum('currency2' , ['تومان', 'ريال', 'دلار', 'درهم امارات', 'لیر', 'یورو', 'دلار استرالیا', 'بیتکوین', 'تتر', 'دوچ کوین', 'اتریوم', 'شیبا'])->default('دلار');
            $table->enum('currency3' , ['تومان', 'ريال', 'دلار', 'درهم امارات', 'لیر', 'یورو', 'دلار استرالیا', 'بیتکوین', 'تتر', 'دوچ کوین', 'اتریوم', 'شیبا'])->default('دوچ کوین');
            $table->string('default_get_way' , 50)->nullable();
            $table->boolean('register_receipt')->default(1)->comment('اجازه ثبت فیش بانکی');
            $table->timestamps();
        });

        DB::table('users')->insert([
            'tax' => 0 ,
            'tax_calculation_type' => 'percentage' ,
            'tax1' => 0 ,
            'tax1_calculation_type' => 'percentage' ,
            'tax2' => 0 ,
            'tax2_calculation_type' => 'percentage' ,
            'tax3' => 0 ,
            'tax3_calculation_type' => 'percentage' ,
            'default_currency' => 'تومان' ,
        ]);
    }


    public function down(): void
    {
        Schema::dropIfExists('acc_settings');
    }
};
