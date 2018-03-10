<?php

use App\User;
use App\Court;
use App\Branch;
use App\Cluber;
use App\Commune;
use App\Facility;
use App\Workshop;
use App\SportField;
use Faker\Generator as Faker;
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

$factory->define(User::class, function (Faker $faker) {
    static $password;

    return [
		'name'              => $faker->name,
		'lastname'          => $faker->lastName,
		'nickname'          => $faker->unique()->username,
		'email'             => $faker->unique()->safeEmail,
		'phone'             => $faker->unique()->numberBetween($min = 50000000, $max = 99999999),
		'password'          => $password ?: $password = bcrypt('secret'),
		'picture_profile'   => str_random(20),
		'status'            => $status = $faker->randomElement([User::USERVERIFIED, User::USERNOTVERIFIED]),
		'type'              => $faker->randomElement([User::ADMIN, User::REGULAR]),
		'code_verification' => $status == User::USERVERIFIED ? 'verified' : User::setCodeVerification(),
		'remember_token'    => str_random(10)
    ];
});

$factory->define(SportField::class, function (Faker $faker) {
	//$cluber = Cluber::has('sportfields')->get()->random();
    return [
		'name'        => $faker->unique()->word,
		'description' => $faker->paragraph(1),
		'address'     => $faker->address,
		'lat'         => $faker->latitude,
		'lng'         => $faker->longitude,
		'website'     => 'www.jouer-club.com',
		'time_begin'  => $faker->dateTime,
		'time_end'    => $faker->dateTime,
		'cluber_id'   => User::all()->random()->id,
		'commune_id'  => Commune::all()->random()->code,
    ];
});

$factory->define(Court::class, function (Faker $faker) {
    return [
		'name'           => $faker->word,
		'status'         => $faker->randomElement(['available', 'notAvailable', 'maintenance']),
		'sport_field_id' => SportField::inRandomOrder()->first()->id
    ];
});

$factory->define(Branch::class, function (Faker $faker) {
    return [
		'name'           => $faker->word
    ];
});

$factory->define(Facility::class, function (Faker $faker) {
    return [
		'name'         => $faker->word,
		'brand'        => $faker->randomElement(['nike', 'adidas', 'new balance', 'jordan', 'wilson']),
		'purchased_at' => $faker->dateTime,
		'court_id'     => Court::inRandomOrder()->first()->id
    ];
});

$factory->define(Workshop::class, function (Faker $faker) {
	$cluber = Cluber::has('sportfields')->get()->random();    
	$coach  = User::all()->except($cluber->id)->random(); 
    return [
		'name'        => $faker->word,
		'description' => $faker->paragraph(1),
		'lat'         => $faker->latitude,
		'lng'         => $faker->longitude,
		'time_begin'  => $faker->dateTime,
		'time_end'    => $faker->dateTime,
		'status'      => $faker->randomElement(['pending', 'now', 'finished']),
		'coach_id'    => $coach->id
    ];
});