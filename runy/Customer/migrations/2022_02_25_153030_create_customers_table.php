<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('title' , 30)->nullable();
            $table->string('name');
            $table->string('family');
            $table->bigInteger('customer_user_id')->nullable();
            $table->string('cell')->nullable()->unique();
            $table->string('telephone')->nullable();
            $table->string('pic')->default('theme/img/default-avatar.png');
            $table->string('address')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('company')->nullable();
            $table->string('city')->nullable();
            $table->enum('type' , ['عمده فروش','خرده فروش','تامین کننده','مشتری'])->default('مشتری');
            $table->integer('commission' )->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
