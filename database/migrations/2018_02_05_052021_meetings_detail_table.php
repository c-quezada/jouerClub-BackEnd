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
        
            $table->integer('meeting_id')->comment(" field to store the meeting id");
            $table->foreign('meeting_id')->references('id')->on('meetings');

            $table->integer('user_id')->comment(" field to store the user that participate in this meeting");
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('court_id')->comment(" field to store the court where is carried out");
            $table->foreign('court_id')->references('id')->on('courts');

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
