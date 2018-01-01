<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AvailabilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('availability', function (Blueprint $table) {
            $table->increments('id')->comment("field to store availability's number idenfifier");
            $table->integer('courtId')->comment("field to store court's number idenfifier, it's a foreign key")->unsigned();
            $table->integer('jouerId')->comment("field to store user's number idenfifier of 'JOUER' type, it's a foreign key")->unsigned();
            $table->dateTime('timeBegin')->comment("field to store when the sporting match starts");
            $table->dateTime('timeEnd')->comment("field to store when the sporting match ends");
            $table->timestamps();

            $table->foreign('courtId')->references('id')->on('courts');
            $table->foreign('jouerId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('availability');
    }
}
