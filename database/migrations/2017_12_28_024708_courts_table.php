<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CourtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courts', function (Blueprint $table) {
            $table->increments('id')->comment("field to store court's number idenfifier");
            $table->string('name', 20)->comment("field to store court's name");
            $table->enum('status', ['available', 'notAvailable', 'maintenance'])->comment("field to store user's status")->default('available');
            $table->integer('sport_field_id')->comment("field to store sportField's number idenfifier, it's a foreign key")->unsigned();
            $table->string('avatar')->comment("field to store court's avatar")->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('sport_field_id')->references('id')->on('sportsFields')->onDelete('cascade');
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
