<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CoachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coaches', function (Blueprint $table) {
            $table->increments('id')->comment(" field to store coach's number idenfifier");
            $table->integer('users_id')->comment("field to store user's number idenfifier, it's a foreign key")->unsigned()->unique();
            $table->string('nickname', 30)->comment("field to store coach's nickname")->unique();
            $table->string('expericence')->comment("field to store coach's history / about me");
            $table->string('rut', 8)->comment("field to store coach's rut")->unique();
            $table->string('dv', 1)->comment("field to store coach's dv")->unique();
            $table->softDeletes();

            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coaches');
    }
}
