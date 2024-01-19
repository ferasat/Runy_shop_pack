<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePollQuestionTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poll_question_templates', function (Blueprint $table) {
            $table->id();
            $table->string('question_title')->nullable();
            $table->integer('poll_id')->nullable();
            $table->enum('question_type', [ 'checkbox' ,'radio','text','select'])->default('text')->nullable();
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
        Schema::dropIfExists('poll_question_templates');
    }
}
