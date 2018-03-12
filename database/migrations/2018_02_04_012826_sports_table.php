<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sports', function(Blueprint $table){

            $table->increments('id')->comment("field to store sport's number idenfifier");
            $table->string('name')->comment("field to store sport's name")->unique();
            $table->string('description')->comment("field to store sport's description");
            $table->timestamps();

        }); 

        Schema::create('sport_branch', function (Blueprint $table) {

            $table->integer('sport_id')->comment(" field to store the sports that practice this user");
            $table->foreign('sport_id')->references('id')->on('sports');

            $table->integer('branch_id')->comment(" field to store the sports that practice this user");
            $table->foreign('branch_id')->references('id')->on('branches');

        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('sports');
    }
}

//
