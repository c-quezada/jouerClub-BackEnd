<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CommunesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communes', function (Blueprint $table) {
            $table->increments('code', 6)->comment(" field to store commune's code")->unique();
            $table->string('name', 30)->comment(" field to store commune's name")->unique();
            $table->string('lat')->comment("field to store commune's lat");
            $table->string('lng')->comment("field to store commune's lng");
            $table->integer('province_code')->comment(" field to store commune's province code")->unsigned();
            $table->softDeletes();

            $table->foreign('province_code')->references('code')->on('provinces')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('communes');
    }
}
