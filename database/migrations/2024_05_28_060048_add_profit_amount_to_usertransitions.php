<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddProfitAmountToUsertransitions extends Migration
{
    public function up()
    {
        Schema::table('usertransitions', function (Blueprint $table) {
            $table->decimal('profit_amount', 10, 2)->after('off_amount');
        });
    }

    public function down()
    {
        Schema::table('usertransitions', function (Blueprint $table) {
            $table->dropColumn('profit_amount');
        });
    }
}
