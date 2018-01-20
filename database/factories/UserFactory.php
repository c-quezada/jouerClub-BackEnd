<?php

use Faker\Generator as Faker;
use App\User;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
		'name'             => $faker->name,
		'lastname'         => $faker->lastName,
		'email'            => $faker->unique()->safeEmail,
		'phone'            => $faker->unique()->randomElement(12),
		'password'         => $password ?: $password = bcrypt('secret'),
		'picture_profile'   => str_random(20),
		'status'           => $status = $faker->random_element(User::userVerified, User::userNotVerified),
		'code_verification' => $status == User::userVerified ? 'yes' : User::setCodeVerification(),
		'remember_token'   => str_random(10),
    ];
});