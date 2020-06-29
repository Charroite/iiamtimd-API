<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrittersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('critters', function (Blueprint $table) {
            $table->id();
            $table->integer('species_id');
            $table->String('name');
            $table->String('image_path'); 
            $table->string('location');
            $table->String('price');
            $table->integer('month_available_from');
            $table->integer('month_available_to');
            $table->integer('month_available_also_from');
            $table->integer('month_available_also_to');
            $table->integer('time_available_from');
            $table->integer('time_available_to');
            $table->boolean('donated');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('critters');
    }
}
