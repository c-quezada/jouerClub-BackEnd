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
            $table->integer('code', 6)->comment(" field to store province's code")->unique();
            $table->string('name', 30)->comment(" field to store province's name")->unique();
            $table->string('lat')->comment("field to store province's lat");
            $table->string('lng')->comment("field to store province's lng");
            $table->integer('region_code')->comment(" field to store provinces's region code")->unsigned();

            $table->foreign('region_code')->references('code')->on('regions')->onDelete('cascade');
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
