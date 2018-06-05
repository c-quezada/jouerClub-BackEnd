<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
			[
			'name'           => 'Neutro',
			'branch_id'      =>  2
			],

			[
			'name'           => 'Portero',
			'branch_id'      =>  2
			],

			[
			'name'           => 'Defensor',
			'branch_id'      =>  2
			],

			[
			'name'           => 'Lateral',
			'branch_id'      =>  2
			],

			[
			'name'           => 'Mediocampista defensivo',
			'branch_id'      =>  2
			],

			[
			'name'           => 'Volante',
			'branch_id'      =>  2
			],

			[
			'name'           => 'Mediocampista ofensivo',
			'branch_id'      =>  2
			],

			[
			'name'           => 'Delantero',
			'branch_id'      =>  2
			],

			[
			'name'           => 'Extremo',
			'branch_id'      =>  2
			],

	    ]);

    }
}
    