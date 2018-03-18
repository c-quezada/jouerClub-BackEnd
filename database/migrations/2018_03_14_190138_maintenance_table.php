<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MaintenanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance', function (Blueprint $table) {
            $table->increments('id')->comment("field to store maintenance's number idenfifier");
            $table->string('observations')->comment("field to store facility's observation");
            $table->enum('status', [1,2,3,4,5])->default(3)->comment("field to store facility's status");
            $table->integer('facility_id')->comment("field to store facility's number idenfifier, it's a foreign key")->unsigned();
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('facility_id')->references('id')->on('facilities')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maintenance');
    }
}
