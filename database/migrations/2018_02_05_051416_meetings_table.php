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

            $table->integer('branch_id')->comment("field to store branch's number idenfifier")->unsigned();
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');

            $table->integer('court_id')->comment("field to store court's number idenfifier")->unsigned();
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