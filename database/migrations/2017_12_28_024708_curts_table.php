<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CurtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('sportFieldCurt', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('curt_id')->unsigned();
            $table->integer('sportField_id')->unsigned();
            $table->timestamps();

            $table->foreign('curt_id')->references('id')->on('curts')->onDelete('cascade');
            $table->foreign('sportField_id')->references('id')->on('sportsFields')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curts');
    }
}
