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
            $table->enum('status', ['available', 'notAvailable', 'maintenance'])->comment("field to store user's status, default value is available")->default('available');
            $table->integer('sport_field_id')->unsigned()->comment("field to store sportfield to which the court belongs, it's a foreign key, references through id field of sportfield table");
            $table->string('avatar', 100)->comment("field to store court's avatar as a relative path")->nullable();
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
