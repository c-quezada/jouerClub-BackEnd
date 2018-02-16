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

            $table->integer('jouer_id')->comment(" field to store the jouer that created this team");
            $table->foreign('jouer_id')->references('id')->on('users');

            $table->integer('branch_id')->comment(" field to store the jouer that created this team");
            $table->foreign('branch_id')->references('id')->on('branches');

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
        Schema::dropIfExist('teams');    }
}
