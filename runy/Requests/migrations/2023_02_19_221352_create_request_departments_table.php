<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestDepartmentsTable extends Migration
{

    public function up()
    {
        Schema::create('request_departments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->bigInteger('user_id');
            $table->boolean('master')->default(1);
            $table->bigInteger('sub_department_id')->nullable();
            $table->timestamps();
        });

        \Illuminate\Support\Facades\DB::table('request_departments')->insert([
            'name' => 'پشتیبانی فنی سایت',
            'description' => 'پشتیبانی فنی سایت',
            'user_id' => 1,
            'sub_department_id' => \Illuminate\Support\Facades\Auth::id(),
        ]);
    }


    public function down()
    {
        Schema::dropIfExists('request_departments');
    }
}
