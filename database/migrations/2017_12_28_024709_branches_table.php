<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {

            $table->increments('id')->comment("field to store branch's number idenfifier");
            $table->string('name', 60)->comment("field to store branch's name");

            $table->integer('sport_id')->unsigned()->comment("field to store sport to which the branch belongs, it's a foreign key, references through id field of sports table");
            $table->foreign('sport_id')->references('id')->on('sports')->onDelete('cascade');

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
        Schema::dropIfExists('branches');
    }
}
