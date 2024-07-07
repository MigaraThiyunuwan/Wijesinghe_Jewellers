<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gem_businesses_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('description');
            $table->decimal('price', 8, 2);
            $table->string('image')->default('null');
            $table->string('shape');
            $table->decimal('carat', 7, 2); 
            $table->decimal('width', 5, 2); 
            $table->decimal('length', 5, 2);
            $table->string('contact_no');
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
        Schema::dropIfExists('advertisements');
    }
}