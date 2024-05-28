<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGemBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gem_businesses', function (Blueprint $table) {
            $table->id();
            $table->string('market_name')->default('Market_Name');
            $table->string('owner_name');
            $table->string('gem_asso_num');
            $table->string('business_num')->default('Business_Num');
            $table->string('address');
            $table->string('contact_no');
            $table->string('email');
            $table->string('certificate_image');
            $table->time('time_from');
            $table->time('time_to');
            $table->string('password');
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
        Schema::dropIfExists('gem_businesses');
    }
}