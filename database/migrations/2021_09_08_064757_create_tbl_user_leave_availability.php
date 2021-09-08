<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUserLeaveAvailability extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user_leave_availability', function (Blueprint $table) {
            $table->id();
            $table->string('user_id', '256');
            $table->string('leave_name', '256');
            $table->string('leave_year', '10');
            $table->string('number_of_days', '10');
            $table->string('occupied', '10');
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_user_leave_availability');
    }
}
