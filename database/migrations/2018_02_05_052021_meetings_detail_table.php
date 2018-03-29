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
        Schema::create('jouer_meeting', function(Blueprint $table){

            $table->primary(['jouer_id', 'meeting_id']);
        
            $table->integer('meeting_id')->unsigned()->comment(" field to store the meeting id");
            $table->foreign('meeting_id')->references('id')->on('meetings');

            $table->integer('jouer_id')->unsigned()->comment(" field to store the jouer that participate in this meeting");
            $table->foreign('jouer_id')->references('id')->on('users')->onDelete('cascade');



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
        Schema::dropIfExist('jouer_meeting');   
    }
}
