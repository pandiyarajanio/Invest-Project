<?php
// CreateAdminCredentials.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('role')->default('admin');
            $table->timestamps();
        });
        
        $defaultAdminEmail = env('DEFAULT_ADMIN_EMAIL', 'example@gmail.com');
        $defaultAdminPassword = env('DEFAULT_ADMIN_PASSWORD', 'exaple1234');

        DB::table('admins')->insert([
            'email' => $defaultAdminEmail,
            'password' => Hash::make($defaultAdminPassword),
            'name' => 'Admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
}