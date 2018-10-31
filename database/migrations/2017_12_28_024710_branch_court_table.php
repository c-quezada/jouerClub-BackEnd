<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BranchCourtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_court', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('court_id')->unsigned()->comment("field to store court to which the branch belongs, it's a foreign key, references through id field of branches table");
            $table->foreign('court_id')->references('id')->on('courts')->onDelete('cascade');
            
            $table->integer('branch_id')->unsigned()->comment("field to store branch to which the court belongs, it's a foreign key, references through id field of courts table");
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
