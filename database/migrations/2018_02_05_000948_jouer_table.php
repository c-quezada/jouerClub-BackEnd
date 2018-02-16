<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JouerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jouers', function (Blueprint $table) {
            $table->integer('user_id')->comment("field to store jouer's number idenfifier, it's a foreign key")->unsigned();
            $table->primary('user_id');
            $table->string('nickname')->comment(" field to store jouer's nickName")->unique();

            $table->integer('sport_id')->comment(" field to store the sports that practice this user");
            $table->foreign('sport_id')->references('id')->on('sports');

            $table->integer('skill_id')->comment(" field to store the skill that have this user");
            $table->foreign('skill_id')->references('id')->on('skills');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('jouers');
    }
}


































