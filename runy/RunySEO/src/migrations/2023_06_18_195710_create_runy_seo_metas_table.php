<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('runy_seo_metas', function (Blueprint $table) {
            $table->id();
            $table->string('post_type')->comment('product or article or page or cat .... ');
            $table->string('post_type_id');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->longText('keywords')->nullable();
            $table->enum('is_brand' , ['yes','no'])->default('no');
            $table->enum('type' , ['BreadcrumbList' , 'Product' , 'Article' , 'Event' , 'FAQPage' , 'NewsArticle', 'CategoryCodeSet'])->default('Product');
            $table->longText('schema_context')->nullable(); // json
            $table->bigInteger('user_id')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('runy_seo_metas');
    }
};
