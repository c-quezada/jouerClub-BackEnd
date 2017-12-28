<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SportFieldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sportsFields', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->text('description');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('website');
            $table->time('open');
            $table->time('close');
            $table->timestamps();
        });

        Schema::create('cluberSportField', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cluber_id')->unsigned();
            $table->integer('sportField_id')->unsigned();
            $table->timestamps();

            $table->foreign('cluber_id')->references('id')->on('clubers')->onDelete('cascade');
            $table->foreign('sportField_id')->references('id')->on('sportsFields')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sportField');
    }
}
