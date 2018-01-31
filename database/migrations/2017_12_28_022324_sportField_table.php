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
            $table->string('address')->comment("field to store sportField's address");
            $table->string('lat')->comment("field to store sportField's latitude for his ubication");
            $table->string('lng')->comment("field to store sportField's longitude for his ubication");
            $table->string('website')->comment("field to store sportField's web page")->nullable();
            $table->string('facebook')->comment("field to store sportField's facebook")->nullable();
            $table->string('instagram')->comment("field to store sportField's instagram")->nullable();
            $table->string('twitter')->comment("field to store sportField's twitter")->nullable();
            $table->dateTime('time_begin')->comment("field to store when the sportfield's it's open");
            $table->dateTime('time_end')->comment("field to store when the sportfield's it's close");
            $table->integer('cluber_id')->comment("field to store cluber's number idenfifier, it's a foreign key")->unsigned();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('cluber_id')->references('id')->on('users')->onDelete('cascade');

        });

        /*Schema::create('cluberSportField', function (Blueprint $table) {
            $table->increments('id')->comment("field to store cluberSportField's number idenfifier");
            $table->integer('cluber_id')->comment("field to store cluber's number idenfifier, it's a foreign key")->unsigned();
            $table->integer('sport_field_id')->comment("field to store sportField's number idenfifier, it's a foreign key")->unsigned();

            $table->foreign('cluber_id')->references('user_id')->on('clubers')->onDelete('cascade');
            $table->foreign('sport_field_id')->references('id')->on('sportsFields')->onDelete('cascade');
        });*/

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
