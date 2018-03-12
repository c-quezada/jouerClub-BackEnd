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
            $table->integer('id', 6)->comment(" field to store region's id")->unique();
            $table->string('name', 50)->comment("field to store region's name")->unique();
            $table->string('code_name', 6)->comment("field to store region's ISO_3166_2_CL")->unique();
            $table->string('lat')->comment("field to store region's lat");
            $table->string('lng')->comment("field to store region's lng");
            $table->softDeletes();
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
