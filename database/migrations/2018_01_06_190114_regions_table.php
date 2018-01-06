<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->increments('id')->comment(" field to store region's number idenfifier");
            $table->string('number', 6)->comment(" field to store region's number")->unique();
            $table->string('name', 50)->comment("field to store region's name")->unique();
            $table->string('ISO_3166_2_CL', 6)->comment("field to store region's ISO_3166_2_CL")->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regions');
    }
}
