<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WorkshopDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jouer_workshop', function(Blueprint $table){

            $table->primary(['jouer_id', 'workshop_id']);
        
            $table->integer('workshop_id')->unsigned()->comment(" field to store the meeting id");
            $table->foreign('workshop_id')->references('id')->on('workshops');

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
        Schema::dropIfExist('jouer_workshop');  
    }
}
