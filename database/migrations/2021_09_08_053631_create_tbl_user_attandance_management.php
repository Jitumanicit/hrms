<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUserAttandanceManagement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user_attandance_management', function (Blueprint $table) {
            $table->id();
            $table->string('user_id', '256');
            $table->dateTime('attandance_date', $precision = 0);
            $table->time('attandance_time', $precision = 0);
            $table->time('leave_time', $precision = 0)->nullable();
            $table->BOOLEAN('entry_status')->comment('1 = Before Time, 2 = On Time, 3 = After Time');
            $table->BOOLEAN('exit_status')->comment('1 = Before Time, 2 = On Time, 3 = After Time')->nullable();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_user_attandance_management');
    }
}
