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
        Schema::create('poll_questions', function (Blueprint $table) {
            $table->id();
            $table->integer('poll_id');
            $table->string('title');
            $table->longText('users')->nullable();
            $table->integer('session_id')->nullable();
            $table->integer('cookie_id')->nullable();
            $table->integer('total_vote_count')->default(0);
            $table->enum('poll_type', [ 'single_choice' ,'multiple_choice','box_text'])->default('single_choice')->nullable();
            $table->enum('for_type', [ 'product' ,'service'])->default('product')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poll_questions');
    }
};
