<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCompanyUserAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_company_user_address', function (Blueprint $table) {
            $table->id();
            $table->string('user_id', '256');
            $table->BOOLEAN('address_type')->comment('1 = Permanent, 2 = Residential');
            $table->string('street', '256')->nullable();
            $table->string('city', '256')->nullable();
            $table->string('state', '256')->nullable();
            $table->string('zip', '6')->nullable();
            $table->string('country', '20')->nullable();
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
        Schema::dropIfExists('tbl_company_user_address');
    }
}
