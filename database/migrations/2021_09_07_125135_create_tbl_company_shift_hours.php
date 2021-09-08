<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCompanyShiftHours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_company_shift_hours', function (Blueprint $table) {
            $table->id();
            $table->string('company_id', '256')->unique();
            $table->string('shift_name', '256')->unique();
            $table->time('open_time', $precision = 0);
            $table->time('close_time', $precision = 0);
            $table->time('buffer_time', $precision = 0);
            $table->string('time_zone', '256');
            $table->BOOLEAN('isactive')->comment('1 = Active, 2 = Not Active, 3 = Block, 4 = Pause');
            $table->BOOLEAN('isdeleted')->comment('1 = Deleted, 2 = Not Deleted');
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
        Schema::dropIfExists('tbl_company_shift_hours');
    }
}
