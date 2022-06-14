<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelPackgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_packges', function (Blueprint $table) {
            $table->id();
            $table->string('name_offerta'); 
            $table->decimal('price', 8, 2);
            $table->string('validity');
            $table->tinyInteger('person');
            $table->tinyInteger('child');
            $table->string('location');
            $table->string('parking_area');
            $table->string('type');
            $table->smallInteger('square_meters')->unsigned();
            $table->tinyInteger('rooms');
            $table->tinyInteger('bathrooms');
            $table->string('image');
            $table->text('description');
            $table->string('breakfast');
            $table->string('lunch_dinner');
            $table->string('airplane_flight');
            $table->boolean('is_available')->default(false);
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
        Schema::dropIfExists('travel_packges');
    }
}


/* 
travel_package
id
timestamp
name_offerta
price
validity
person
child
location
type
square_meters
rooms
bathrooms
image
description
breakfast
lunch_dinner
airplane_flight
check-in
check-out
is_available

*/
