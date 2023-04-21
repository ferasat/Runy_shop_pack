<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionalSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('optional_settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->index();
            $table->string('name_text')->nullable(); // نام فیلد که در ترجمه نمایش در میاد
            $table->longText('value')->nullable();
            $table->boolean('autoload')->default(1);
            $table->string('type')->default('public');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('optional_settings');
    }
}
