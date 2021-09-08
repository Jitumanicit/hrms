<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCompanyDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_company_details', function (Blueprint $table) {
            $table->id();
            $table->string('user_id', '256')->unique();
            $table->string('company_name', '256');
            $table->string('company_logo', '256')->nullable();
            $table->string('alias', '256')->nullable();
            $table->string('employee_count', '20')->nullable();
            $table->string('phone', '20')->nullable();
            $table->string('mobile', '20')->nullable();
            $table->string('email', '256')->nullable();
            $table->string('fax', '30')->nullable();
            $table->string('website', '256')->nullable();
            $table->text('description')->nullable();
            $table->string('street', '256')->nullable();
            $table->string('city', '256')->nullable();
            $table->string('state', '256')->nullable();
            $table->string('zip', '256')->nullable();
            $table->string('country', '256')->nullable();
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
        Schema::dropIfExists('tbl_company_details');
    }
}
