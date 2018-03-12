<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function(Blueprint $table){

            $table->increments('id')->comment("field to store skill's number idenfifier");
            $table->string('name')->comment("field to store skill's name");//->unique();
            $table->string('description')->comment("field to store skill's description");
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
        Schema::dropIfExist('skills');
    }
}
//