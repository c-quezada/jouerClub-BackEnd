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
            'name'             => ucfirst('Christopher Pierre'),
            'lastname'         => ucfirst('Quezada Montesinos'),
            'email'            => ucfirst('cpqm07@gmail.com'),
            'phone'            => '962245462',
            'password'         => bcrypt('2112Aeqdlf'),
            'pictureProfile'   => strtolower('image195492263'),
            'codeVerification' => '123456', 
            'remember_token'   => rand(10000000,900000000),
            'created_at'       => Carbon::now(),
            'updated_at'        => Carbon::yesterday()
            ],

            [
            'name'             => ucfirst('Danna Javiera'),
            'lastname'         => ucfirst('Gonalez Ibañez'),
            'email'            => strtolower('danna.gonzalez@gmail.com'),
            'phone'            => '90308914',
            'password'         => bcrypt('2112Aeqdlf'),
            'pictureProfile'   => strtolower('image186776996'),
            'codeVerification' => '654321',
            'remember_token'   => rand(10000000,900000000),
            'created_at'       => Carbon::now(),
            'updated_at'        => Carbon::yesterday()
            ]
        ]);

        DB::table('clubers')->insert([
            [
            'user_id' => 1,
            'nickName' => 'cpqm07'
            ],
            [
            'user_id' => 2,
            'nickName' => 'donnna'
            ]
        ]);
    }
}
