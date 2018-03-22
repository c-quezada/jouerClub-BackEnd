<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JouerPivotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jouer_skill', function (Blueprint $table) {

            $table->primary(['jouer_id', 'skill_id']);
            $table->integer('jouer_id')->comment("field to store court's number idenfifier, it's a foreign key")->unsigned();
            $table->integer('skill_id')->comment("field to store branch's number idenfifier, it's a foreign key")->unsigned();

            $table->foreign('jouer_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');

        });

        Schema::create('jouer_team', function (Blueprint $table) {

            
            $table->integer('jouer_id')->unsigned()->comment(" field to store the sports that practice this user");
            $table->foreign('jouer_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('team_id')->unsigned()->comment(" field to store the branch that is the sport");
            $table->foreign('team_id')->references('id')->on('teams');
        });
    }

    public function down()
    {
        Schema::dropIfExists('jouer_skill');
        Schema::dropIfExists('jouer_team');
    }
}
