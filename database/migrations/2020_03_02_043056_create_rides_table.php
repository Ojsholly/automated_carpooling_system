<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->text('pickup_location');
            $table->double('pickup_location_latitude', 10, 8)->nullable();
            $table->double('pickup_location_longitude', 11, 8)->nullable();
            $table->text('destination');
            $table->double('destination_latitude', 10, 8)->nullable();
            $table->double('destination_longitude', 11, 8)->nullable();
            $table->dateTime('datetime');
            $table->integer('car_id')->unsigned();
            $table->integer('number_of_seats')->unsigned();
            $table->integer('price')->unsigned();
            $table->json('passenger_ids')->nullable();
            $table->text('info');
            $table->integer('status');
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
        Schema::dropIfExists('rides');
    }
}
