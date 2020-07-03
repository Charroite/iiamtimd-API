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
            $table->increments('id');
            $table->integer('species_id')->unsigned();
            $table->String('name');
            $table->String('image_path'); 
            $table->string('location');
            $table->String('price');
            $table->integer('month_available_from')->unsigned();
            $table->integer('month_available_to')->unsigned();
            $table->integer('month_available_also_from')->unsigned()->nullable();
            $table->integer('month_available_also_to')->unsigned()->nullable();
            $table->integer('time_available_from')->unsigned();
            $table->integer('time_available_to')->unsigned();
            $table->boolean('donated');
        });
    
    Schema::table('critters', function (Blueprint $table) {
     
        $table->foreign('species_id')->references('id')->on('species');
        $table->foreign('month_available_from')->references('id')->on('months');
        $table->foreign('month_available_to')->references('id')->on('months');   
        $table->foreign('month_available_also_from')->references('id')->on('months');	
        $table->foreign('month_available_also_to')->references('id')->on('months');
        $table->foreign('time_available_from')->references('time_id')->on('timecycle'); 
        $table->foreign('time_available_to')->references('time_id')->on('timecycle');

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
