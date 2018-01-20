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
            $table->integer('user_id')->comment("field to store cluber's number idenfifier, it's a foreign key")->unsigned();
            $table->primary('user_id');
            $table->string('nickname')->comment(" field to store cluber's nickName")->unique();
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
        Schema::dropIfExists('cluber');
    }
}
