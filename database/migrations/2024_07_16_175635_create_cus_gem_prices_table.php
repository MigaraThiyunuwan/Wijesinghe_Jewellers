<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCusGemPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cus_gem_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gem_type_id')->constrained('cus_gem_types')->onDelete('cascade');
            $table->foreignId('gem_size_id')->constrained('cus_gem_sizes')->onDelete('cascade');
            $table->decimal('price', 8, 2);
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
        Schema::dropIfExists('cus_gem_prices');
    }
}