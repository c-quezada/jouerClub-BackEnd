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
			'name'           => 'Baby fútbol',
			'sport_id'       =>  30
			],

			[
			'name'           => 'Futbolito',
			'sport_id'       =>  30
			],

			[
			'name'           => 'Fútbol 11',
			'sport_id'       =>  30
			],

			[
			'name'           => 'Fútbol playa',
			'sport_id'       =>  30
			]
	    ]);

    }
}
    