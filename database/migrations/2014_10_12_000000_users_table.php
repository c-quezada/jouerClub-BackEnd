<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment("field to store user's number idenfifier");
            $table->string('name', 100)->comment("field to store user's name, limit 25");
            $table->string('lastname', 25)->comment("field to store user's lastname, limit 25");
            $table->string('nickname', 30)->comment("field to store coach's nickname")->unique();
            $table->string('email', 50)->comment("field to store user's email that must be unique, limimt 30")->unique();
            $table->string('phone', 12)->comment("field to store user's phone with his area code, must be unique, limimt 12")->unique();
            $table->string('password')->comment("field to store user's encrypted password, whit bcrypt helper function - LARAVEL");
            $table->string('picture_profile')->comment("field to store user's picture profile")->default('profile');
            $table->enum('status', ['verified', 'pending'])->comment("field to store user's status")->default('pending');
            $table->enum('type', ['admin', 'regular'])->comment("field to store user's type")->default('regular');
            $table->string('code_verification', 40)->comment("field to store user's verification code, this define the user's status");
            $table->rememberToken();
            $table->timestamps();
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
        Schema::dropIfExists('users');
    }
}
