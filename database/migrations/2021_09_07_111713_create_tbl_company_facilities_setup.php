<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCompanyFacilitiesSetup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_company_facilities_setup', function (Blueprint $table) {
            $table->id();
            $table->string('user_id', '256')->unique();
            $table->string('company_id', '256')->unique();
            $table->string('no_of_hr', '20');
            $table->string('no_of_user', '20');
            $table->string('no_of_dept', '20');
            $table->string('no_of_group', '20');
            $table->dateTime('validity', $precision = 0);
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
        Schema::dropIfExists('tbl_company_facilities_setup');
    }
}
