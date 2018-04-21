<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->insert([
        	
	        [
	        'id'             =>  1,	
	        'name'           => 'StreetBall',
	        'sport_id'       =>  9
	        ],

	        [
	        'id'             =>  2,	
	        'name'           => 'Básquetbol 10',
	        'sport_id'       =>  9
	        ],

	        [
	        'id'             =>  3,	
	        'name'           => 'En ruta',
	        'sport_id'       =>  22
	        ],

	        [
	        'id'             =>  4,	
	        'name'           => 'En pista',
	        'sport_id'       =>  22
	        ],

	        [
	        'id'             =>  5,	
	        'name'           => 'Ciclismo urbano',
	        'sport_id'       =>  22
	        ],

	        [
	        'id'             =>  6,	
	        'name'           => 'Baby fútbol',
	        'sport_id'       =>  30
	        ],

	        [
	        'id'             =>  7,	
	        'name'           => 'Futbolito',
	        'sport_id'       =>  45
	        ],

	        [
	        'id'             =>  8,	
	        'name'           => 'Fútbol 11',
	        'sport_id'       =>  30
	        ],

	        [
	        'id'             =>  9,	
	        'name'           => 'Fútbol playa',
	        'sport_id'       =>  30
	        ],

	        [
	        'id'             =>  10,	
	        'name'           => 'Motocross',
	        'sport_id'       =>  45
	        ],

	        [
	        'id'             =>  11,	
	        'name'           => 'Enduro',
	        'sport_id'       =>  45
	        ],

	        [
	        'id'             =>  12,	
	        'name'           => 'Motociclismo de velocidad',
	        'sport_id'       =>  45
	        ],

	        [
	        'id'             =>  13,	
	        'name'           => 'Rugby 15',
	        'sport_id'       =>  60
	        ],

	        [
	        'id'             =>  14,	
	        'name'           => 'Seven',
	        'sport_id'       =>  60
	        ],

	        [
	        'id'             =>  15,	
	        'name'           => 'Single',
	        'sport_id'       =>  74
	        ],

	        [
	        'id'             =>  16,	
	        'name'           => 'Doble',
	        'sport_id'       =>  74
	        ]

	    ]);

    }
}
    