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
        Schema::create('availabilities', function (Blueprint $table) {
            $table->increments('id')->comment("field to store availability's number idenfifier");
            $table->integer('court_id')->comment("field to store court's number idenfifier, it's a foreign key")->unsigned();
            $table->integer('jouer_id')->comment("field to store user's number idenfifier of 'JOUER' type, it's a foreign key")->unsigned();
            $table->dateTime('time_begin')->comment("field to store when the sporting match starts");
            $table->dateTime('time_end')->comment("field to store when the sporting match ends");
            $table->enum('status', ['available', 'reserve'])->comment("field to store matchś status");
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('court_id')->references('id')->on('courts')->onDelete('cascade');
            $table->foreign('jouer_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('availabilities');
    }
}
