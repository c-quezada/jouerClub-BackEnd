<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities', function (Blueprint $table) {
            $table->increments('id')->comment("field to store falicity's number idenfifier, it's a foreign key")->unsigned();
            $table->string('name', 50)->comment("field to store falicity's name");
            $table->string('brand', 50)->comment("field to store falicity's brand");
            $table->integer('price')->comment("field to store falicity's price");
            $table->string('avatar', 100)->comment("field to store facility's avatar as a relative path")->nullable();
            $table->integer('useful')->comment("field to store facility's useful life, estimated in years, 0 < value < 6")->nullable();
            $table->dateTimeTz('purchased_at')->comment("field to store when the court was bought");
            $table->integer('court_id')->unsigned()->comment("field to store court to which the facility belongs, it's a foreign key, references through id field of courts table");
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('court_id')->references('id')->on('courts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facilities');
    }
}
