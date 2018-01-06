<?php

use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
                [
                'number'        => 'I',
                'name'          => 'Tarapacá',
                'ISO_3166_2_CL' => 'CL-TA'
                ], 
                
                [
                'number'        => 'II',
                'name'          => 'Antofagasta',
                'ISO_3166_2_CL' => 'CL-AN'
                ], 
                
                [
                'number'        => 'III',
                'name'          => 'Atacama',
                'ISO_3166_2_CL' => 'CL-AT'
                ], 
                
                [
                'number'        => 'IV',
                'name'          => 'Coquimbo',
                'ISO_3166_2_CL' => 'CL-CO'
                ], 
                
                [
                'number'        => 'V',
                'name'          => 'Valparaíso',
                'ISO_3166_2_CL' => 'CL-VS'
                ], 
                
                [
                'number'        => 'VI',
                'name'          => 'Región del Libertador Gral. Bernardo O’Higgins',
                'ISO_3166_2_CL' => 'CL-LI'
                ], 
                
                [
                'number'        => 'VII',
                'name'          => 'Maule',
                'ISO_3166_2_CL' => 'CL-ML'
                ], 
                
                [
                'number'        => 'VIII',
                'name'          => 'Región del Biobío',
                'ISO_3166_2_CL' => 'CL-BI'
                ], 
                
                [
                'number'        => 'IX',
                'name'          => 'Región de la Araucanía',
                'ISO_3166_2_CL' => 'CL-AR'
                ], 
                
                [
                'number'        => 'X',
                'name'          => 'Región de los Lagos',
                'ISO_3166_2_CL' => 'CL-LL'
                ], 
                
                [
                'number'        => 'XI',
                'name'          => 'Región Aisén del Gral. Carlos Ibáñez del Campo',
                'ISO_3166_2_CL' => 'CL-AI'
                ], 
                
                [
                'number'        => 'XII',
                'name'          => 'Región de Magallanes y de la Antártica Chilena',
                'ISO_3166_2_CL' => 'CL-MA'
                ], 
                
                [
                'number'        => 'XIII',
                'name'          => 'Región Metropolitana de Santiago',
                'ISO_3166_2_CL' => 'CL-RM'
                ], 
                
                [
                'number'        => 'XIV',
                'name'          => 'Región de los Ríos',
                'ISO_3166_2_CL' => 'CL-LR'
                ], 
                
                [
                'number'        => 'XV',
                'name'          => 'Arica y Parinacota',
                'ISO_3166_2_CL' => 'CL-AP'
                ], 
                
                [
                'number'        => 'XVI',
                'name'          => 'Región de Ñuble',
                'ISO_3166_2_CL' => 'CL-ÑU'
                ], 

        ]);


        DB::table('provinces')->insert([
                [
                'name'     => 'Arica',
                'regionId' => 15
                ],
                
                
                [
                'name'     => 'Parinacota',
                'regionId' => 15
                ],
                
                [
                'name'     => 'Iquique',
                'regionId' => 1
                ],
                
                [
                'name'     => 'Tamarugal',
                'regionId' => 1
                ],
                
                [
                'name'     => 'Antofagasta',
                'regionId' => 2
                ],
                
                [
                'name'     => 'El Loa',
                'regionId' => 2
                ],
                
                [
                'name'     => 'Tocopilla',
                'regionId' => 2
                ],
                
                [
                'name'     => 'Copiapó',
                'regionId' => 3
                ],
                
                [
                'name'     => 'Chañaral',
                'regionId' => 3
                ],
                
                [
                'name'     => 'Huasco',
                'regionId' => 3
                ],
                
                [
                'name'     => 'Elqui',
                'regionId' => 4
                ],
                
                [
                'name'     => 'Choapa',
                'regionId' => 4
                ],
                
                [
                'name'     => 'Limarí',
                'regionId' => 4
                ],
                
                [
                'name'     => 'Valparaíso',
                'regionId' => 5
                ],
                
                [
                'name'     => 'Isla de Pascua',
                'regionId' => 5
                ],
                
                [
                'name'     => 'Los Andes',
                'regionId' => 5
                ],
                
                [
                'name'     => 'Petorca',
                'regionId' => 5
                ],
                
                [
                'name'     => 'Quillota',
                'regionId' => 5
                ],
                
                [
                'name'     => 'San Antonio',
                'regionId' => 5
                ],
                
                [
                'name'     => 'San Felipe de Aconcagua',
                'regionId' => 5
                ],
                
                [
                'name'     => 'Marga Marga',
                'regionId' => 5
                ],
                
                [
                'name'     => 'Cachapoal',
                'regionId' => 6
                ],
                
                [
                'name'     => 'Cardenal Caro',
                'regionId' => 6
                ],
                
                [
                'name'     => 'Colchagua',
                'regionId' => 6
                ],
                
                [
                'name'     => 'Talca',
                'regionId' => 7
                ],
                
                [
                'name'     => 'Cauquenes',
                'regionId' => 7
                ],
                
                [
                'name'     => 'Curicó',
                'regionId' => 7
                ],
                
                [
                'name'     => 'Linares',
                'regionId' => 7
                ],
                
                [
                'name'     => 'Concepción',
                'regionId' => 8
                ],
                
                [
                'name'     => 'Arauco',
                'regionId' => 8
                ],
                
                [
                'name'     => 'Biobío',
                'regionId' => 8
                ],
                
                [
                'name'     => 'Cautín',
                'regionId' => 9
                ],
                
                [
                'name'     => 'Malleco',
                'regionId' => 9
                ],
                
                [
                'name'     => 'Valdivia',
                'regionId' => 14
                ],
                
                [
                'name'     => 'Renco',
                'regionId' => 14
                ],
                
                [
                'name'     => 'Llanquihue',
                'regionId' => 10
                ],
                
                [
                'name'     => 'Chiloé',
                'regionId' => 10
                ],
                
                [
                'name'     => 'Osorno',
                'regionId' => 10
                ],
                
                [
                'name'     => 'Palena',
                'regionId' => 10
                ],
                
                [
                'name'     => 'Coihaique',
                'regionId' => 11
                ],
                
                [
                'name'     => 'Aisén',
                'regionId' => 11
                ],
                
                [
                'name'     => 'Capitán Prat',
                'regionId' => 11
                ],
                
                [
                'name'     => 'General Carrera',
                'regionId' => 11
                ],
                
                [
                'name'     => 'Magallanes',
                'regionId' => 12
                ],
                
                [
                'name'     => 'Antártica Chilena',
                'regionId' => 12
                ],
                
                [
                'name'     => 'Tierra del Fuego',
                'regionId' => 12
                ],
                
                [
                'name'     => 'Última Esperanza',
                'regionId' => 12
                ],
                
                [
                'name'     => 'Santiago',
                'regionId' => 13
                ],
                
                [
                'name'     => 'Cordillera',
                'regionId' => 13
                ],
                
                [
                'name'     => 'Chacabuco',
                'regionId' => 13
                ],
                
                [
                'name'     => 'Maipo',
                'regionId' => 13
                ],
                
                [
                'name'     => 'Melipilla',
                'regionId' => 13
                ],
                
                [
                'name'     => 'Talagante',
                'regionId' => 13
                ],
                
                [
                'name'     => 'Diguillín',
                'regionId' => 16
                ],
                
                [
                'name'     => 'Punilla',
                'regionId' => 16
                ],
                
                [
                'name'     => 'Itata',
                'regionId' => 16
                ]
        ]);

    

                                 
    }
}