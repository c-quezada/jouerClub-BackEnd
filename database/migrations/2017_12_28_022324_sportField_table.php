<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SportFieldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sportsFields', function (Blueprint $table) {
            $table->increments('id')->comment("field to store sportField's number idenfifier");
            $table->string('name', 30)->comment("field to store sportField's number idenfifier");
            $table->text('description')->comment("field to store sportField's description");
            $table->string('latitude')->comment("field to store sportField's latitude for his ubication");
            $table->string('longitude')->comment("field to store sportField's longitude for his ubication");
            $table->string('website')->comment("field to store sportField's web page");
            $table->time('open')->comment("field to store when the sportfield's it's open");
            $table->time('close')->comment("field to store when the sportfield's it's close");
            $table->timestamps();
        });

        Schema::create('cluberSportField', function (Blueprint $table) {
            $table->increments('id')->comment("field to store cluberSportField's number idenfifier");
            $table->integer('cluberId')->comment("field to store cluber's number idenfifier, it's a foreign key")->unsigned();
            $table->integer('sportFieldId')->comment("field to store sportField's number idenfifier, it's a foreign key")->unsigned();
            $table->timestamps();

            $table->foreign('cluberId')->references('id')->on('clubers')->onDelete('cascade');
            $table->foreign('sportFieldId')->references('id')->on('sportsFields')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sportField');
    }
}
