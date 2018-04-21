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
	        'id'             =>  1,	
	        'name'           => 'Atacante',
	        'branch_id'      =>  1
	        ],

	        [
	        'id'             =>  2,	
	        'name'           => 'Defensor',
	        'branch_id'      =>  1
	        ],

	        [
	        'id'             =>  3,	
	        'name'           => 'Base',
	        'branch_id'      =>  2
	        ],

	        [
	        'id'             =>  4,	
	        'name'           => 'Escolta',
	        'branch_id'      =>  2
	        ],

	        [
	        'id'             =>  5,	
	        'name'           => 'Alero',
	        'branch_id'      =>  2
	        ],

	        [
	        'id'             =>  6,	
	        'name'           => 'Ala-pívot',
	        'branch_id'      =>  2
	        ],

	        [
	        'id'             =>  7,	
	        'name'           => 'Pívot',
	        'branch_id'      =>  2
	        ],

	        [
	        'id'             =>  8,	
	        'name'           => 'Acople a rueda',
	        'branch_id'      =>  3
	        ],

	        [
	        'id'             =>  9,	
	        'name'           => 'Equilibrio',
	        'branch_id'      =>  3
	        ],

	        [
	        'id'             =>  10,	
	        'name'           => 'Fuerza',
	        'branch_id'      =>  4
	        ],

	        [
	        'id'             =>  11,	
	        'name'           => 'Velocidad',
	        'branch_id'      =>  4
	        ],

	        [
	        'id'             =>  12,	
	        'name'           => 'Resistencia',
	        'branch_id'      =>  4
	        ],

	        [
	        'id'             =>  13,	
	        'name'           => 'Aceleración',
	        'branch_id'      =>  5
	        ],

	        [
	        'id'             =>  14,	
	        'name'           => 'Control',
	        'branch_id'      =>  5
	        ],

	        [
	        'id'             =>  15,	
	        'name'           => 'Portero',
	        'branch_id'      =>  6
	        ],

	        [
	        'id'             =>  16,	
	        'name'           => 'Defensor',
	        'branch_id'      =>  6
	        ],

	        [
	        'id'             =>  17,	
	        'name'           => 'Atacante',
	        'branch_id'      =>  6
	        ],

	        [
	        'id'             =>  18,	
	        'name'           => 'Portero',
	        'branch_id'      =>  7
	        ],

	        [
	        'id'             =>  19,	
	        'name'           => 'Defensa central',
	        'branch_id'      =>  7
	        ],

	        [
	        'id'             =>  20,	
	        'name'           => 'Defensa lateral',
	        'branch_id'      =>  7
	        ],

	        [
	        'id'             =>  21,	
	        'name'           => 'Mediocampista defensivo',
	        'branch_id'      =>  7
	        ],

	        [
	        'id'             =>  22,	
	        'name'           => 'Mediocampista ofensivo',
	        'branch_id'      =>  7
	        ],

	        [
	        'id'             =>  23,	
	        'name'           => 'Delantero cecntro',
	        'branch_id'      =>  7
	        ],

	        [
	        'id'             =>  24,	
	        'name'           => 'Delantero externo',
	        'branch_id'      =>  7
	        ],

	        [
	        'id'             =>  25,	
	        'name'           => 'PT',
	        'branch_id'      =>  8
	        ],

	        [
	        'id'             =>  26,	
	        'name'           => 'DFC',
	        'branch_id'      =>  8
	        ],

	        [
	        'id'             =>  27,	
	        'name'           => 'DFD',
	        'branch_id'      =>  8
	        ],

	        [
	        'id'             =>  28,	
	        'name'           => 'DFI',
	        'branch_id'      =>  8
	        ],

	        [
	        'id'             =>  29,	
	        'name'           => 'MCD',
	        'branch_id'      =>  8
	        ],

	        [
	        'id'             =>  30,	
	        'name'           => 'MI',
	        'branch_id'      =>  8
	        ],

	        [
	        'id'             =>  31,	
	        'name'           => 'MD',
	        'branch_id'      =>  8
	        ],

	        [
	        'id'             =>  32,	
	        'name'           => 'MO',
	        'branch_id'      =>  8
	        ],

	        [
	        'id'             =>  33,	
	        'name'           => 'DLC',
	        'branch_id'      =>  8
	        ],

	        [
	        'id'             =>  34,	
	        'name'           => 'EX',
	        'branch_id'      =>  8
	        ],

	        [
	        'id'             =>  35,	
	        'name'           => 'Portero',
	        'branch_id'      =>  9
	        ],

	        [
	        'id'             =>  36,	
	        'name'           => 'Atacante',
	        'branch_id'      =>  9
	        ],

	        [
	        'id'             =>  37,	
	        'name'           => 'Defensor',
	        'branch_id'      =>  9
	        ],

	        [
	        'id'             =>  38,	
	        'name'           => 'Pilar derecho',
	        'branch_id'      =>  13
	        ],

	        [
	        'id'             =>  39,	
	        'name'           => 'Pilar izquierdo',
	        'branch_id'      =>  13
	        ],

	        [
	        'id'             =>  40,	
	        'name'           => 'Segunda línea',
	        'branch_id'      =>  13
	        ],

	        [
	        'id'             =>  41,	
	        'name'           => 'Flanker',
	        'branch_id'      =>  13
	        ],

	        [
	        'id'             =>  42,	
	        'name'           => 'Octavo',
	        'branch_id'      =>  13
	        ],

	        [
	        'id'             =>  43,	
	        'name'           => 'Medio scrum',
	        'branch_id'      =>  13
	        ],

	        [
	        'id'             =>  44,	
	        'name'           => 'Apertura',
	        'branch_id'      =>  13
	        ],

	        [
	        'id'             =>  45,	
	        'name'           => 'Wing',
	        'branch_id'      =>  13
	        ],

	        [
	        'id'             =>  46,	
	        'name'           => 'Primer centro',
	        'branch_id'      =>  13
	        ],

	        [
	        'id'             =>  47,	
	        'name'           => 'Segundo centro',
	        'branch_id'      =>  13
	        ],

	        [
	        'id'             =>  48,	
	        'name'           => 'Fullback',
	        'branch_id'      =>  13
	        ]

	    ]);

    }
}
    