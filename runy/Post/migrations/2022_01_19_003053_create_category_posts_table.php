<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryPostsTable extends Migration
{

    public function up()
    {
        Schema::create('category_posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique()->index()->nullable(); // نامک
            $table->longText('description')->nullable();
            $table->string('picture')->nullable();
            $table->string('icon')->nullable();
            $table->enum('typeCat',['post','page','tour'])->nullable();
            $table->enum('statusMaster' , ['yes' , 'no'])->default('yes'); // سردسته هست یا نه
            $table->string('statusChild')->nullable(); // فرزند دارد یا نه
            $table->string('Inherited')->nullable(); // سر دسته چه دسته ای هست -- آی دی اون دسته وارد شود
            $table->enum('statusPublish', ['برای برسی', 'انتشار' , 'پیش نویس'])->default('انتشار')->nullable();
            $table->string('focusKeyword')->nullable(); // عبارت کلیدی کانونی
            $table->string('titleSeo')->nullable(); // عنوان سئو
            $table->string('metaDescription')->nullable(); // توضیح متا
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('category_posts');
    }
}
