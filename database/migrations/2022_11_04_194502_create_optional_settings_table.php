<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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


        DB::table('optional_settings')->insert([
            'settingName' => 'address',
            'settingTextName' => 'آدرس ',
            'value' => 'اصفهان',
        ]);
        DB::table('optional_settings')->insert([
            'settingName' => 'linkTelegram',
            'settingTextName' => 'لینک تلگرام',
            'value' => 'https://t.me/tarahsitenet',
        ]);
        DB::table('optional_settings')->insert([
            'settingName' => 'linkWhatsapp',
            'settingTextName' => 'لینک واتساپ',
            'value' => 'https://wa.me/989372088771',
        ]);
        DB::table('optional_settings')->insert([
            'settingName' => 'linkInstagram',
            'settingTextName' => 'اینستاگرام',
            'value' => 'https://instageram.com/tarahsite_net',
        ]);
        DB::table('optional_settings')->insert([
            'settingName' => 'linkLinkedin',
            'settingTextName' => 'لینکدین',
            'value' => 'https://linkedin.com/company/tarahsite',
        ]);
        DB::table('optional_settings')->insert([
            'settingName' => 'theme',
            'settingTextName' => 'نام پوسته',
            'value' => 'runy-agency',
        ]);
        DB::table('optional_settings')->insert([
            'settingName' => 'homeSlider',
            'settingTextName' => 'اسلایدشو صفحه اول',
            'value' => '1',
        ]);

        DB::table('optional_settings')->insert([
            'settingName' => 'seoKeywords',
            'settingTextName' => 'کلمات کلیدی عمومی',
            'value' => 'کلمات کلیدی',
            'type' => 'seo'
        ]);

        DB::table('optional_settings')->insert([
            'settingName' => 'seoDescription',
            'settingTextName' => 'توضیحات سایت',
            'value' => 'description',
            'type' => 'seo'
        ]);

        DB::table('optional_settings')->insert([
            'settingName' => 'scriptHead',
            'settingTextName' => 'اسکریپت های سایت',
            'value' => '',
            'type' => 'public'
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('optional_settings');
    }
}
