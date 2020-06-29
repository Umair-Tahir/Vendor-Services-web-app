<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('description');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('gallery_image');
            $table->string('cover_image');
            $table->boolean('publish')->default(0);
            $table->timestamps();
            $table->integer('category_id')->unsigned(); //foreign
            $table->integer('city_id')->unsigned();  //foreign
            $table->integer('vendor_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('services');
    }
}
