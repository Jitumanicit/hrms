<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCompanyLocalInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_company_local_information', function (Blueprint $table) {
            $table->id();
            $table->string('user_id', '256')->unique();
            $table->string('company_id', '256')->unique();
            $table->string('access_url', '256')->nullable();
            $table->string('currency', '256')->nullable();
            $table->string('time_zone', '20')->nullable();
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
        Schema::dropIfExists('tbl_company_local_information');
    }
}
