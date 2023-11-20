<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('poll_question_answers', function (Blueprint $table) {
            $table->id();
            $table->integer('question_id');
            $table->string('name')->nullable();
            $table->string('vote_count')->default(0);
            $table->boolean('vote_answer')->default(0);
            $table->text('vote_answer_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poll_question_answers');
    }
};
