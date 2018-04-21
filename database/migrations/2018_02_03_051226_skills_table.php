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

            $table->integer('branch_id')->unsigned()->comment(" field to store the sports that practice this user");
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
            
            $table->timestamps();
            $table->softDeletes();

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