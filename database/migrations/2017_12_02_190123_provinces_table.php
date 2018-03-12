<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->integer('id', 6)->comment(" field to store province's id")->unique();
            $table->string('name', 30)->comment(" field to store province's name")->unique();
            $table->string('lat')->comment("field to store province's lat");
            $table->string('lng')->comment("field to store province's lng");
            $table->integer('region_id')->comment(" field to store provinces's region id")->unsigned();
            $table->softDeletes();

            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provinces');
    }
}
