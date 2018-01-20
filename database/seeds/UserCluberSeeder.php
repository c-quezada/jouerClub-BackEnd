<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserCluberSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            [
            'name'             => 'Christopher Pierre',
            'lastname'         => 'Quezada Montesinos',
            'email'            => 'cpqm07@gmail.com',
            'phone'            => '962245462',
            'password'         => bcrypt('2112Aeqdlf'),
            'picture_profile'   => 'image195492263',
            'code_verification' => '123456', 
            'remember_token'   => rand(10000000,900000000),
            'created_at'       => Carbon::now(),
            'updated_at'        => Carbon::yesterday()
            ],

            [
            'name'             => 'Danna Javiera',
            'lastname'         => 'Gonalez Ibañez',
            'email'            => 'danna.gonzalez@gmail.com',
            'phone'            => '90308914',
            'password'         => bcrypt('2112Aeqdlf'),
            'picture_profile'   => 'image186776996',
            'code_verification' => '654321',
            'remember_token'   => rand(10000000,900000000),
            'created_at'       => Carbon::now(),
            'updated_at'        => Carbon::yesterday()
            ]
        ]);

        DB::table('clubers')->insert([
            [
            'user_id' => 1,
            'nickname' => 'cpqm07'
            ],
            [
            'user_id' => 2,
            'nickname' => 'donnna'
            ]
        ]);
    }
}
