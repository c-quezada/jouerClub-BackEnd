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
        Schema::create('jouer_skills', function (Blueprint $table) {
            $table->integer('jouer_id')->comment("field to store court's number idenfifier, it's a foreign key")->unsigned();
            $table->integer('skill_id')->comment("field to store branch's number idenfifier, it's a foreign key")->unsigned();

            $table->foreign('jouer_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');

        });
    }

    public function down()
    {
        Schema::dropIfExists('jouer_skills');
    }
}
