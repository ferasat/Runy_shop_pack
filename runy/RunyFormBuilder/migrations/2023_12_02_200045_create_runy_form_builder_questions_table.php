<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('runy_form_builder_questions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('runy_form_id');
            $table->bigInteger('where_id');
            $table->string('title')->nullable();
            $table->string('answer_type')->nullable();
            $table->integer('answer_count')->nullable();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('runy_form_builder_questions');
    }
};
