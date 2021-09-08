<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCompanyBusinessDays extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_company_business_days', function (Blueprint $table) {
            $table->id();
            $table->string('company_id', '256')->unique();
            $table->string('days', '256');
            $table->time('open_time', $precision = 0);
            $table->time('close_time', $precision = 0);
            $table->string('time_zone', '256');
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
        Schema::dropIfExists('tbl_company_business_days');
    }
}
