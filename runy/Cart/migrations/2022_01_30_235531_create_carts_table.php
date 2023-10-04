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
            $table->string('user_id')->nullable();
            $table->string('status',25)->default('in_process'); // in_process  - being_packaged - ready_to_send - posted - delivered - defective_information - lack_of_goods - returned - 'apply'
            $table->string('total_price')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
