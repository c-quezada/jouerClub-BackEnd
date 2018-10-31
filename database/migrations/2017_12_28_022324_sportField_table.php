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
            $table->string('name', 60)->comment("field to store sportField's number idenfifier");
            $table->text('description', 1000)->comment("field to store sportField's description")->nullable();
            $table->string('address', 100)->comment("field to store sportField's address");
            $table->string('lat', 20)->comment("field to store sportField's latitude for his ubication");
            $table->string('lng', 20)->comment("field to store sportField's longitude for his ubication");
            $table->string('website', 50)->comment("field to store sportField's web page")->nullable();
            $table->string('phone', 12)->comment("field to store sportField's phone number")->nullable();
            $table->string('facebook', 20)->comment("field to store sportField's facebook")->nullable();
            $table->string('instagram', 20)->comment("field to store sportField's instagram")->nullable();
            $table->string('twitter', 20)->comment("field to store sportField's twitter")->nullable();
            $table->string('time_begin')->comment("field to store when the sportfield's it's open");
            $table->string('time_end')->comment("field to store when the sportfield's it's close");
            $table->integer('cluber_id')->unsigned()->comment("field to store type cluber user to which the sportfield belongs, it's a foreign key, references through id field of sportfields table");
            $table->integer('commune_id')->unsigned()->comment("field to store commune to which the sportfield belongs, it's a foreign key, references through id field of commune table");
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('cluber_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('commune_id')->references('id')->on('communes')->onDelete('cascade');

        });
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
