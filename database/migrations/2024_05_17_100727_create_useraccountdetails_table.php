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
        Schema::create('useraccountdetails', function (Blueprint $table) {
            $table->id();
            $table->string('userid')->nullable()->default(null);
            $table->string('Account_type')->nullable()->default(null);
            $table->string('holder_name')->nullable()->default(null);
            $table->string('Bank_Name')->nullable()->default(null);
            $table->string('Account_Number')->nullable()->default(null);
            $table->string('Branch')->nullable()->default(null);
            $table->string('bank_city')->nullable()->default(null);
            $table->string('IFSC_Code')->nullable()->default(null);
            $table->string('Cheque_Leaf')->nullable()->default(null);
            $table->string('UserImage')->nullable()->default(null);
            $table->string('city')->nullable()->default(null);
            $table->string('pannumber')->nullable()->default(null);
            $table->string('Status')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('useraccountdetails');
    }
};
