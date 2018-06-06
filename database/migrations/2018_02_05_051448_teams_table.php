<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function(Blueprint $table){

            $table->increments('id')->comment("field to store team's number idenfifier");
            $table->string('name')->comment("field to store team's name");
            $table->string('motto')->comment("field to store team's motto");//MOTTO=LEMA o CONSIGNA(de equipo)

            $table->integer('branch_id')->unsigned()->comment(" field to store the team's branches");
            $table->foreign('branch_id')->references('id')->on('branches');

            $table->integer('jouer_id')->comment("field to store user's number idenfifier of 'JOUER' for identificate who created  the meeting -  it's a foreign key")->unsigned();
            $table->foreign('jouer_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('teams');    }
}
