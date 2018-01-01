<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CluberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubers', function (Blueprint $table) {
            $table->increments('id')->comment(" field to store cluber's number idenfifier");
            $table->integer('usersId')->comment("field to store user's number idenfifier, it's a foreign key")->unsigned();
            $table->timestamps();

            $table->foreign('usersId')->references('id')->on('users')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cluber');
    }
}
