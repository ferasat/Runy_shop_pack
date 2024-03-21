<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('acc_settings', function (Blueprint $table) {
            $table->id();
            $table->string('tax' , 50);
            $table->string('tax1' , 50);
            $table->string('tax2' , 50);
            $table->string('tax3' , 50);
            $table->enum('default_currency' , ['تومان', 'ريال', 'دلار', 'درهم امارات', 'لیر', 'یورو', 'دلار استرالیا', 'بیتکوین', 'تتر', 'دوچ کوین', 'اتریوم', 'شیبا']);
            $table->string('default_get_way' , 50);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('acc_settings');
    }
};
