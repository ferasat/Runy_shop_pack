<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('family')->nullable();
            $table->string('cellPhone')->nullable()->unique();
            $table->string('username')->nullable()->unique();
            $table->bigInteger('company_id')->nullable()->comment('ایدی اژانس های همکار');
            $table->string('company_name')->nullable();
            $table->bigInteger('acc_id')->nullable()->unique();
            $table->string('pic')->nullable()->default('theme/img/avatar-1.png');
            $table->string('Signature')->nullable()->default('theme/img/avatar-1.png');
            $table->string('codeMeli')->nullable()->unique();
            $table->longText('about')->nullable();
            $table->longText('address')->nullable();
            $table->enum('gender' , ['male','female'])->nullable()->default('male');
            $table->string('passport')->nullable();
            $table->date('passportExpDate')->nullable();
            $table->date('birthDate')->nullable()->comment('تاریخ تولد');
            $table->enum('status', ['active', 'disabled'])->default('active');
            $table->enum('levelUser' , ['SAdmin','Admin' , 'Seller', 'Editor', 'Sales Manager' , 'Accountants', 'Senior Employee','company', 'Company Counter', 'customer'])->default('customer')->nullable(); //agency تعریف شرکت agency_counter تعریف کانتر شرکت همکار
            $table->string('levelPermission')->default('1')->nullable(); // 1 customer - 2 Company Counter - 3 Seller & Sales Manager - 4 Editor - 5 Senior Employee - 6 Accountants - 9 Admin - 10 SAdmin
            $table->string('role' )->nullable()->comment('role for As Employee'); /// ['Driver','Admin','Sales','Tour Leader','Driver','Driver','Driver','Driver','Driver','Driver','Driver','Driver',] مخصوص کارمندان بک آفیس
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert( [
            'name' => 'Amin' ,
            'family' => 'Ferasat' ,
            'status' => 'active' ,
            'levelUser' => 'SAdmin' ,
            'levelPermission' => '10' ,
            'pic' => 'theme/img/admin.jpg' ,
            'cellPhone' => '9372088771' ,
            'email' => 'admin@tarahsite.net' ,
            'password' => bcrypt('@dmiN98A' ),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
