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
        Schema::create('usertransitions', function (Blueprint $table) {
            $table->increments('userid');
            $table->string('off_modeofpayment')->nullable();
            $table->string('off_upi')->nullable();
            $table->string('off_holdername');
            $table->string('off_typeofaccount')->nullable();
            $table->string('off_bankname')->nullable();
            $table->string('off_accountnumber')->nullable();
            $table->string('off_branchname')->nullable();
            $table->string('off_ifsc')->nullable();
            $table->string('off_city')->nullable();
            $table->string('off_amount')->nullable();
            $table->string('cheque_leaf')->nullable();
            $table->string('Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usertransitions');
    }
};
