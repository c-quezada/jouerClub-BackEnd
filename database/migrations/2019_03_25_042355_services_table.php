<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('services', function(Blueprint $table){
            $table->increments('id')->comment("field to store service's number idenfifier");
            $table->string('name')->comment("field to store service's name");
            $table->string('avatar')->comment("field to store user's avatar")->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('service_sport_field', function(Blueprint $table){
            $table->primary(['service_id', 'sport_field_id']);
            $table->integer('sport_field_id')->unsigned()->comment("field to store the sportfield's id");
            $table->integer('service_id')->unsigned()->comment("field to store the service's id");

            $table->foreign('sport_field_id')->references('id')->on('sportsFields');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->softDeletes();
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