<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CluberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubers', function (Blueprint $table) {
            $table->string('something')->comment(" field to store cluber's nickName")->unique();
            $table->string('rut', 8)->comment("field to store coach's rut")->unique();
            $table->string('dv', 1)->comment("field to store coach's dv");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cluber');
    }
}
