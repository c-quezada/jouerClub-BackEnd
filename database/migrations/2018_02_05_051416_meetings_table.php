<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table){

            $table->increments('id')->comment("field to store meeting's number idenfifier");
            $table->dateTime('time_begin')->comment("field to store meeting's start");
            $table->dateTime('time_end')->comment("field to store meeting's end");
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
        Schema::dropIfExist('meetings');
    }
}
//