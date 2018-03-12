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
            $table->string('name')->comment("field to store branch's name");
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('branch_court', function (Blueprint $table) {
            $table->integer('court_id')->comment("field to store court's number idenfifier, it's a foreign key")->unsigned();
            $table->integer('branch_id')->comment("field to store branch's number idenfifier, it's a foreign key")->unsigned();

            $table->foreign('court_id')->references('id')->on('courts')->onDelete('cascade');
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');

        });
    }    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courts');
    }
}
