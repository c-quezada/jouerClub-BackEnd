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
            $table->enum('status', ['pending', 'now', 'finished'])->comment("field to store meeting's status, default value = pending")->default('pending');
            $table->timestamps();
            $table->softDeletes();

            $table->integer('jouer_id')->unsigned()->comment("field to store user's number idenfifier of 'JOUER' for identificate who created the meeting - it's a foreign key");
            $table->foreign('jouer_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('court_id')->unsigned()->comment("field to store court to which the meeting belongs, it's a foreign key, references through id field of court table");
            $table->foreign('court_id')->references('id')->on('courts')->onDelete('cascade');

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
