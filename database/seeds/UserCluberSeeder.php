<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserCluberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
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
            'codeVerification' => '123456'
            ],

            [
            'name'             => ucfirst('Danna Javiera'),
            'lastname'         => ucfirst('Gonalez Ibañez'),
            'email'            => strtolower('danna.gonzalez@gmail.com'),
            'phone'            => '90308914',
            'password'         => bcrypt('2112Aeqdlf'),
            'pictureProfile'   => strtolower('image186776996'),
            'codeVerification' => '654321'
            ]
        ]);

        DB::table('clubers')->insert([
            [
            'userid'  => 1,
            'nickName' => 'cpqm07'
            ],
            [
            'userid'  => 2,
            'nickName' => 'donnna'
            ]
        ]);

    }
}
