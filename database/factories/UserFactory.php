<?php

use App\Team;
use App\User;
use App\Court;
use App\Skill;
use App\Sport;
use App\Branch;
use App\Cluber;
use App\Commune;
use App\Meeting;
use App\Facility;
use App\Workshop;
use App\SportField;
use App\Maintenance;
use App\Availability;
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
		'avatar'            => str_random(20),
		'status'            => $status = $faker->randomElement([User::USERVERIFIED, User::USERNOTVERIFIED]),
		'type'              => $faker->randomElement(['admin', 'dev', 'jouer', 'cluber', 'coach']),
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
		'commune_id'  => Commune::all()->random()->id,
    ];
});

$factory->define(Court::class, function (Faker $faker) {
    return [
		'name'           => $faker->word,
		'status'         => $faker->randomElement(['available', 'notAvailable', 'maintenance']),
		'sport_field_id' => SportField::inRandomOrder()->first()->id
    ];
});

$factory->define(Meeting::class, function (Faker $faker) {
	//$cluber = Cluber::has('sportfields')->get()->random();
    return [
		'time_begin'  => $faker->dateTime,
		'time_end'    => $faker->dateTime,
		'status'      => $faker->randomElement(['pending', 'now', 'finished']),
		'court_id'    => Court::all()->random()->id
    ];
});

$factory->define(Branch::class, function (Faker $faker) {
    return [
		'name'           => $faker->word,
		'sport_id'       => Sport::inRandomOrder()->first()->id
    ];
});

$factory->define(Facility::class, function (Faker $faker) {
    return [
		'name'         => $faker->word,
		'brand'        => $faker->randomElement(['nike', 'adidas', 'new balance', 'jordan', 'wilson']),
		'price'             => $faker->unique()->numberBetween($min = 50000000, $max = 99999999),
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

$factory->define(Team::class, function (Faker $faker) {
    return [
		'name'        => $faker->word,
		'motto'       => $faker->word,
		'branch_id'   => Branch::inRandomOrder()->first()->id
    ];
});

$factory->define(Skill::class, function (Faker $faker) {
    return [
		'name'        => $faker->word,
		'description' => $faker->paragraph(1)
    ];
});

$factory->define(Maintenance::class, function (Faker $faker) {
    return [
		'observations' => $faker->paragraph(1),
		'mark' => $faker->randomElement([1,2,3,4,5]),
		'facility_id' => Facility::inRandomOrder()->first()->id
    ];
});

$factory->define(Availability::class, function (Faker $faker) {
    return [
		'court_id' => Court::inRandomOrder()->first()->id,
		'jouer_id' => User::inRandomOrder()->first()->id,
		'time_begin'  => $faker->dateTime,
		'time_end'    => $faker->dateTime,
		'status' => $faker->randomElement(['available', 'reserve']),

    ];
});
