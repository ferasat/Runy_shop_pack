<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePollTypeAnswerFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poll_type_answer_fields', function (Blueprint $table) {
            $table->id();
            $table->integer('poll_type_answer_field_template_id')->nullable();
            $table->string('answer_title')->nullable();
            $table->string('type')->nullable();
            $table->string('value')->nullable();
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
        Schema::dropIfExists('poll_type_answer_fields');
    }
}
