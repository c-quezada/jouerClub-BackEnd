<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MeetingsDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings_detail', function(Blueprint $table){

            $table->increments('id')->comment("field to store meeting detail's number idenfifier");
        
            $table->integer('meeting_id')->unsigned()->comment(" field to store the meeting id");
            $table->foreign('meeting_id')->references('id')->on('meetings');

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
        Schema::dropIfExist('meetings_detail');    }
}
