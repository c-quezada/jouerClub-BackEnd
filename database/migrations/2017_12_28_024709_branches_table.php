<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->increments('id')->comment("field to store branch's number idenfifier");
            $table->string('name')->comment("field to store branch's name")->unique();
            $table->timestamps();
        });

        Schema::create('courtBranches', function (Blueprint $table) {
            $table->increments('id')->comment("field to store sportFieldCourt's number idenfifier");
            $table->integer('courtId')->comment("field to store court's number idenfifier, it's a foreign key")->unsigned();
            $table->integer('branchId')->comment("field to store branch's number idenfifier, it's a foreign key")->unsigned();
            $table->timestamps();

            $table->foreign('courtId')->references('id')->on('courts')->onDelete('cascade');
            $table->foreign('branchId')->references('id')->on('branches')->onDelete('cascade');
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
