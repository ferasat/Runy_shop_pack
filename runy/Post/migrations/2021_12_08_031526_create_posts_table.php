<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date_publish')->nullable(); // تاریخ نمایش پست
            $table->longText('texts')->nullable();
            $table->longText('shortDescription')->nullable();
            $table->string('pic')->nullable();
            $table->enum('statusPublish', ['forCheck' , 'draft' ,'publish'])->default('draft');
            $table->integer('specialPin')->default('0');  /// هر عدد یه معنی : 0 معمولی - 1 خاص و پین شده
            $table->enum('formatPost' , ['text','video','gallery','dl-video','dl-file'])->default('text');  /// فرمت نمایش پست را نشان می دهد
            $table->enum('typePost' , ['post','page','portfolio'])->default('post');  /// پست یا برگه یا ....
            $table->string('metaDescription')->nullable();
            $table->string('focusKeyword')->nullable();
            $table->string('titleSeo')->nullable();
            $table->integer('numberView')->nullable();  // آمار بازدید این مطلب
            $table->integer('cat_id')->nullable();  // دستبندی
            $table->string('slug')->unique()->nullable();
            $table->string('redirect')->nullable();
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        DB::table('posts')->insert([
            'name' => 'درباره ما',
            'typePost' => 'page',
            'user_id' => 1,
            'texts' => 'متن درباره ما را اینجا وارد کنید',
        ]);

        DB::table('posts')->insert([
            'name' => 'تماس با ما',
            'typePost' => 'page',
            'user_id' => 1,
            'texts' => 'اطلاعات تماس با ما را اینجا وارد کنید',
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
