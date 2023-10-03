<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('runy_seo_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->nullable();
            $table->string('name_home_page')->nullable();
            $table->string('description_home_page')->nullable();
            $table->string('keyword_home_page')->nullable();
            $table->string('site_scripts')->nullable();
            $table->timestamps();
        });

        DB::table('runy_seo_settings')->insert( [
            'site_name' => '' ,
            'name_home_page' => '' ,
            'description_home_page' => '' ,
            'keyword_home_page' => '' ,
            'site_scripts' => '' ,
        ]);

    }

    public function down(): void
    {
        Schema::dropIfExists('runy_seo_settings');
    }
};
