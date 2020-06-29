<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmenitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amenities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('price');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->boolean('event_planners');
            $table->boolean('wifi');
            $table->boolean('pet_friendly');
            $table->boolean('catering_service');
            $table->boolean('car_rentals');  
            $table->boolean('accommodations');                          
            $table->integer('service_id')->unsigned(); //foreign
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
        Schema::dropIfExists('amenities');
    }
}
