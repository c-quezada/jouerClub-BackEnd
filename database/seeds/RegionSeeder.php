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
        'id'           => 1,
        'name'           => 'Tarapacá',
        'code_name'       => 'CL-TA',
        'lat'            => '-20.164',
        'lng'            => '-69.5541'
        ], 

        [
        'id'           => 2,
        'name'           => 'Antofagasta',
        'code_name'       => 'CL-AN',
        'lat'            => '-23.7503',
        'lng'            => '-69.6'
        ], 

        [
        'id'           => 3,
        'name'           => 'Atacama',
        'code_name'       => 'CL-AT',
        'lat'            => '-27.5276',
        'lng'            => '-70.2494'
        ], 

        [
        'id'           => 4,
        'name'           => 'Coquimbo',
        'code_name'       => 'CL-CO',
        'lat'            => '-30.8301',
        'lng'            => '-70.9816'
        ], 

        [
        'id'           => 5,
        'name'           => 'Valparaíso',
        'code_name'       => 'CL-VS',
        'lat'            => '-32.9039',
        'lng'            => '-71.0262'
        ], 

        [
        'id'           => 6,
        'name'           => 'Región del Libertador Gral. Bernardo O’Higgins',
        'code_name'       => 'CL-LI',
        'lat'            => '-34.4294',
        'lng'            => '-71.0393'
        ], 

        [
        'id'           => 7,
        'name'           => 'Maule',
        'code_name'       => 'CL-ML',
        'lat'            => '-35.5892',
        'lng'            => '-71.5007'
        ], 

        [
        'id'           => 8,
        'name'           => 'Región del Biobío',
        'code_name'       => 'CL-BI',
        'lat'            => '-37.2442',
        'lng'            => '72.4661'
        ], 

        [
        'id'           => 9,
        'name'           => 'Región de la Araucanía',
        'code_name'       => 'CL-AR',
        'lat'            => '-38.5505',
        'lng'            => '-72.4382'
        ], 

        [
        'id'           => 10,
        'name'           => 'Región de los Lagos',
        'code_name'       => 'CL-LL',
        'lat'            => '-42.1071',
        'lng'            => '-72.6425'
        ], 

        [
        'id'           => 11,
        'name'           => 'Región Aisén del Gral. Carlos Ibáñez del Campo',
        'code_name'       => 'CL-AI',
        'lat'            => '-46.2772',
        'lng'            => '-73.6628'
        ], 

        [
        'id'           => 12,
        'name'           => 'Región de Magallanes y de la Antártica Chilena',
        'code_name'       => 'CL-MA',
        'lat'            => '-54.3551',
        'lng'            => '-70.5284'
        ], 

        [
        'id'           => 13,
        'name'           => 'Región Metropolitana de Santiago',
        'code_name'       => 'CL-RM',
        'lat'            => '-33.4417',
        'lng'            => '-70.6541'
        ], 

        [
        'id'           => 14,
        'name'           => 'Región de los Ríos',
        'code_name'       => 'CL-LR',
        'lat'            => '-39.9086',
        'lng'            => '-72.7034'
        ], 

        [
        'id'           => 15,
        'name'           => 'Arica y Parinacota',
        'code_name'       => 'CL-AP',
        'lat'            => '-18.5075',
        'lng'            => '-69.6451'
        ]

    ]);


    DB::table('provinces')->insert([

        [
        'id'           => 122,
        'name'           => 'Antártica Chilena',
        'lat'            => '-55.028',
        'lng'            => '-67.6318',
        'region_id'     => 12
        ],

        [
        'id'           => 21,
        'name'           => 'Antofagasta',
        'lat'            => '-24.5646',
        'lng'            => '-69.2877',
        'region_id'     => 2
        ],

        [
        'id'           => 82,
        'name'           => 'Arauco',
        'lat'            => '-37.7277',
        'lng'            => '-73.3075',
        'region_id'     => 8
        ],

        [
        'id'           => 151,
        'name'           => 'Arica',
        'lat'            => '-18.7139',
        'lng'            => '-69.7522',
        'region_id'     => 15
        ],

        [
        'id'           => 112,
        'name'           => 'Aysén',
        'lat'            => '-46.3848',
        'lng'            => '-72.2955',
        'region_id'     => 11
        ],

        [
        'id'           => 83,
        'name'           => 'Biobío',
        'lat'            => '-37.4739',
        'lng'            => '-72.1572',
        'region_id'     => 8
        ],

        [
        'id'           => 61,
        'name'           => 'Cachapoal',
        'lat'            => '-36.45',
        'lng'            => '-71.7333',
        'region_id'     => 6
        ],

        [
        'id'           => 113,
        'name'           => 'Capitán Prat',
        'lat'            => '-47.9232',
        'lng'            => '-72.9245',
        'region_id'     => 11
        ],

        [
        'id'           => 62,
        'name'           => 'Cardenal Caro',
        'lat'            => '-34.2812',
        'lng'            => '-71.8571',
        'region_id'     => 6
        ],

        [
        'id'           => 72,
        'name'           => 'Cauquenes',
        'lat'            => '-35.9738',
        'lng'            => '-72.3142',
        'region_id'     => 7
        ],

        [
        'id'           => 91,
        'name'           => 'Cautín',
        'lat'            => '-38.727',
        'lng'            => '-72.5989',
        'region_id'     => 9
        ],

        [
        'id'           => 133,
        'name'           => 'Chacabuco',
        'lat'            => '-33.1503',
        'lng'            => '-70.7132',
        'region_id'     => 13
        ],

        [
        'id'           => 32,
        'name'           => 'Chañaral',
        'lat'            => '-26.3599',
        'lng'            => '-70.5981',
        'region_id'     => 3
        ],

        [
        'id'           => 102,
        'name'           => 'Chiloé',
        'lat'            => '-43.117',
        'lng'            => '-73.9984',
        'region_id'     => 10
        ],

        [
        'id'           => 42,
        'name'           => 'Choapa',
        'lat'            => '-31.8006',
        'lng'            => '-70.9827',
        'region_id'     => 4
        ],

        [
        'id'           => 111,
        'name'           => 'Coihaique',
        'lat'            => '-45.2865',
        'lng'            => '-71.7792',
        'region_id'     => 11
        ],

        [
        'id'           => 63,
        'name'           => 'Colchagua',
        'lat'            => '-34.6761',
        'lng'            => '-71.0973',
        'region_id'     => 6
        ],

        [
        'id'           => 81,
        'name'           => 'Concepción',
        'lat'            => '-36.8148',
        'lng'            => '-73.0293',
        'region_id'     => 8
        ],

        [
        'id'           => 31,
        'name'           => 'Copiapó',
        'lat'            => '-27.5765',
        'lng'            => '-70.0269',
        'region_id'     => 3
        ],

        [
        'id'           => 132,
        'name'           => 'Cordillera',
        'lat'            => '-33.6984',
        'lng'            => '-70.1682',
        'region_id'     => 13
        ],

        [
        'id'           => 73,
        'name'           => 'Curicó',
        'lat'            => '-35.1704',
        'lng'            => '-70.8954',
        'region_id'     => 7
        ],

        [
        'id'           => 22,
        'name'           => 'El Loa',
        'lat'            => '-22.3196',
        'lng'            => '-68.5107',
        'region_id'     => 2
        ],

        [
        'id'           => 41,
        'name'           => 'Elqui',
        'lat'            => '-29.8335',
        'lng'            => '-70.8014',
        'region_id'     => 4
        ],

        [
        'id'           => 114,
        'name'           => 'General Carrera',
        'lat'            => '-46.557',
        'lng'            => '-72.4123',
        'region_id'     => 11
        ],

        [
        'id'           => 33,
        'name'           => 'Huasco',
        'lat'            => '-28.5604',
        'lng'            => '-70.6146',
        'region_id'     => 3
        ],

        [
        'id'           => 11,
        'name'           => 'Iquique',
        'lat'            => '-20.8011',
        'lng'            => '-70.0963',
        'region_id'     => 1
        ],

        [
        'id'           => 52,
        'name'           => 'Isla de Pascua',
        'lat'            => '-27.1212',
        'lng'            => '-109.366',
        'region_id'     => 5
        ],

        [
        'id'           => 43,
        'name'           => 'Limarí',
        'lat'            => '-30.7342',
        'lng'            => '-70.9957',
        'region_id'     => 4
        ],

        [
        'id'           => 74,
        'name'           => 'Linares',
        'lat'            => '-35.8495',
        'lng'            => '-71.585',
        'region_id'     => 7
        ],

        [
        'id'           => 101,
        'name'           => 'Llanquihue',
        'lat'            => '-41.453',
        'lng'            => '-72.6135',
        'region_id'     => 10
        ],

        [
        'id'           => 53,
        'name'           => 'Los Andes',
        'lat'            => '-32.9544',
        'lng'            => '-70.3163',
        'region_id'     => 5
        ],

        [
        'id'           => 121,
        'name'           => 'Magallanes',
        'lat'            => '-53.6316',
        'lng'            => '-71.5924',
        'region_id'     => 12
        ],

        [
        'id'           => 134,
        'name'           => 'Maipo',
        'lat'            => '-33.7963',
        'lng'            => '-70.7353',
        'region_id'     => 13
        ],

        [
        'id'           => 92,
        'name'           => 'Malleco',
        'lat'            => '-37.803',
        'lng'            => '-72.7017',
        'region_id'     => 9
        ],

        [
        'id'           => 58,
        'name'           => 'Marga Marga',
        'lat'            => '-33.065',
        'lng'            => '-71.3711',
        'region_id'     => 5
        ],

        [
        'id'           => 135,
        'name'           => 'Melipilla',
        'lat'            => '-33.7369',
        'lng'            => '-71.1743',
        'region_id'     => 13
        ],

        [
        'id'           => 84,
        'name'           => 'Ñuble',
        'lat'            => '-36.6191',
        'lng'            => '-72.0182',
        'region_id'     => 8
        ],

        [
        'id'           => 103,
        'name'           => 'Osorno',
        'lat'            => '-40.7369',
        'lng'            => '-72.9849',
        'region_id'     => 10
        ],

        [
        'id'           => 104,
        'name'           => 'Palena',
        'lat'            => '-43.4449',
        'lng'            => '-72.0923',
        'region_id'     => 10
        ],

        [
        'id'           => 152,
        'name'           => 'Parinacota',
        'lat'            => '-18.3135',
        'lng'            => '-69.3788',
        'region_id'     => 15
        ],

        [
        'id'           => 54,
        'name'           => 'Petorca',
        'lat'            => '-32.1965',
        'lng'            => '-70.8318',
        'region_id'     => 5
        ],

        [
        'id'           => 55,
        'name'           => 'Quillota',
        'lat'            => '-32.9009',
        'lng'            => '-71.2947',
        'region_id'     => 5
        ],

        [
        'id'           => 142,
        'name'           => 'Ranco',
        'lat'            => '-40.4114',
        'lng'            => '-72.4988',
        'region_id'     => 14
        ],

        [
        'id'           => 56,
        'name'           => 'San Antonio',
        'lat'            => '-33.6648',
        'lng'            => '-71.4597',
        'region_id'     => 5
        ],

        [
        'id'           => 57,
        'name'           => 'San Felipe de Aconcagua',
        'lat'            => '-32.7464',
        'lng'            => '-70.7489',
        'region_id'     => 5
        ],

        [
        'id'           => 131,
        'name'           => 'Santiago',
        'lat'            => '-33.4417',
        'lng'            => '-70.6541',
        'region_id'     => 13
        ],

        [
        'id'           => 136,
        'name'           => 'Talagante',
        'lat'            => '-33.6665',
        'lng'            => '-70.9331',
        'region_id'     => 13
        ],

        [
        'id'           => 71,
        'name'           => 'Talca',
        'lat'            => '-35.3921',
        'lng'            => '-71.6125',
        'region_id'     => 7
        ],

        [
        'id'           => 14,
        'name'           => 'Tamarugal',
        'lat'            => '-39.8567',
        'lng'            => '-72.6089',
        'region_id'     => 1
        ],

        [
        'id'           => 123,
        'name'           => 'Tierra del Fuego',
        'lat'            => '-53.7422',
        'lng'            => '-69.2249',
        'region_id'     => 12
        ],

        [
        'id'           => 23,
        'name'           => 'Tocopilla',
        'lat'            => '-22.2306',
        'lng'            => '-69.4666',
        'region_id'     => 2
        ],

        [
        'id'           => 124,
        'name'           => 'Última Esperanza',
        'lat'            => '-51.0163',
        'lng'            => '-73.4285',
        'region_id'     => 12
        ],

        [
        'id'           => 141,
        'name'           => 'Valdivia',
        'lat'            => '-39.7811',
        'lng'            => '-72.5098',
        'region_id'     => 14
        ],

        [
        'id'           => 51,
        'name'           => 'Valparaíso',
        'lat'            => '-33.1381',
        'lng'            => '-71.5617',
        'region_id'     => 5
        ]

    ]);

    DB::table('communes')->insert([
        [
        'name'           => 'Algarrobo',
        'lat'            => '-33.3332',
        'lng'            => '-71.6023',
        'province_id'   => 56
        ],

        [
        'name'           => 'Alhué',
        'lat'            => '-34.0355',
        'lng'            => '-71.028',
        'province_id'   => 135
        ],

        [
        'name'           => 'Alto Biobío',
        'lat'            => '-37.8708',
        'lng'            => '-71.6106',
        'province_id'   => 83
        ],

        [
        'name'           => 'Alto del Carmen',
        'lat'            => '-28.7508',
        'lng'            => '-70.4883',
        'province_id'   => 33
        ],

        [
        'name'           => 'Alto Hospicio',
        'lat'            => '-20.2677',
        'lng'            => '-70.1007',
        'province_id'   => 11
        ],

        [
        'name'           => 'Ancud',
        'lat'            => '-41.8657',
        'lng'            => '-73.8336',
        'province_id'   => 102
        ],

        [
        'name'           => 'Andacollo',
        'lat'            => '-30.2357',
        'lng'            => '-71.0828',
        'province_id'   => 41
        ],

        [
        'name'           => 'Angol',
        'lat'            => '-37.803',
        'lng'            => '-72.7017',
        'province_id'   => 92
        ],

        [
        'name'           => 'Antártica',
        'lat'            => '-64.3589',
        'lng'            => '-60.8203',
        'province_id'   => 122
        ],

        [
        'name'           => 'Antofagasta',
        'lat'            => '-23.6499',
        'lng'            => '-70.4069',
        'province_id'   => 21
        ],

        [
        'name'           => 'Antuco',
        'lat'            => '-37.3273',
        'lng'            => '-71.6775',
        'province_id'   => 83
        ],

        [
        'name'           => 'Arauco',
        'lat'            => '-37.257',
        'lng'            => '-73.2839',
        'province_id'   => 82
        ],

        [
        'name'           => 'Arica',
        'lat'            => '-18.477',
        'lng'            => '-70.3221',
        'province_id'   => 151
        ],

        [
        'name'           => 'Aysén',
        'lat'            => '-45.3975',
        'lng'            => '-72.6993',
        'province_id'   => 112
        ],

        [
        'name'           => 'Buin',
        'lat'            => '-33.754',
        'lng'            => '-70.7163',
        'province_id'   => 134
        ],

        [
        'name'           => 'Bulnes',
        'lat'            => '-36.7422',
        'lng'            => '-72.3018',
        'province_id'   => 84
        ],


        [
        'name'           => 'Cabildo',
        'lat'            => '-32.4095',
        'lng'            => '-71.0798',
        'province_id'   => 54
        ],

        [
        'name'           => 'Cabo de Hornos',
        'lat'            => '-54.9352',
        'lng'            => '-67.6041',
        'province_id'   => 122
        ],

        [
        'name'           => 'Cabrero',
        'lat'            => '-37.0374',
        'lng'            => '-72.4057',
        'province_id'   => 83
        ],

        [
        'name'           => 'Calama',
        'lat'            => '-22.4542',
        'lng'            => '-68.9337',
        'province_id'   => 22
        ],

        [
        'name'           => 'Calbuco',
        'lat'            => '-41.7775',
        'lng'            => '-73.1415',
        'province_id'   => 101
        ],

        [
        'name'           => 'Caldera',
        'lat'            => '-27.0668',
        'lng'            => '-70.817',
        'province_id'   => 31
        ],

        [
        'name'           => 'Calera',
        'lat'            => '-32.7837',
        'lng'            => '-71.1586',
        'province_id'   => 55
        ],

        [
        'name'           => 'Calera de Tango',
        'lat'            => '-33.6326',
        'lng'            => '-70.7821',
        'province_id'   => 134
        ],

        [
        'name'           => 'Calle Larga',
        'lat'            => '-32.9514',
        'lng'            => '-70.5524',
        'province_id'   => 53
        ],

        [
        'name'           => 'Camarones',
        'lat'            => '-19.0089',
        'lng'            => '-69.9074',
        'province_id'   => 151
        ],

        [
        'name'           => 'Camiña',
        'lat'            => '-19.3118',
        'lng'            => '-69.4264',
        'province_id'   => 14
        ],

        [
        'name'           => 'Canela',
        'lat'            => '-31.3935',
        'lng'            => '-71.4578',
        'province_id'   => 42
        ],

        [
        'name'           => 'Cañete',
        'lat'            => '-37.8039',
        'lng'            => '-73.4016',
        'province_id'   => 82
        ],

        [
        'name'           => 'Carahue',
        'lat'            => '-38.7116',
        'lng'            => '-73.1651',
        'province_id'   => 91
        ],

        [
        'name'           => 'Cartagena',
        'lat'            => '-33.5341',
        'lng'            => '-71.4628',
        'province_id'   => 56
        ],

        [
        'name'           => 'Casablanca',
        'lat'            => '-33.3262',
        'lng'            => '-71.3983',
        'province_id'   => 51
        ],

        [
        'name'           => 'Castro',
        'lat'            => '-42.48',
        'lng'            => '-73.7625',
        'province_id'   => 102
        ],

        [
        'name'           => 'Catemu',
        'lat'            => '-32.6981',
        'lng'            => '-70.956',
        'province_id'   => 57
        ],

        [
        'name'           => 'Cauquenes',
        'lat'            => '-35.9738',
        'lng'            => '-72.3142',
        'province_id'   => 72
        ],

        [
        'name'           => 'Cerrillos',
        'lat'            => '-33.497',
        'lng'            => '-70.7112',
        'province_id'   => 131
        ],

        [
        'name'           => 'Cerro Navia',
        'lat'            => '-33.4267',
        'lng'            => '-70.7434',
        'province_id'   => 131
        ],

        [
        'name'           => 'Chaitén',
        'lat'            => '-42.9168',
        'lng'            => '-72.7164',
        'province_id'   => 104
        ],

        [
        'name'           => 'Chañaral',
        'lat'            => '-26.3425',
        'lng'            => '-70.6107',
        'province_id'   => 32
        ],

        [
        'name'           => 'Chanco',
        'lat'            => '-35.7337',
        'lng'            => '-72.5333',
        'province_id'   => 72
        ],

        [
        'name'           => 'Chépica',
        'lat'            => '-34.7303',
        'lng'            => '-71.2688',
        'province_id'   => 63
        ],

        [
        'name'           => 'Chiguayante',
        'lat'            => '-36.9046',
        'lng'            => '-73.0164',
        'province_id'   => 81
        ],

        [
        'name'           => 'Chile Chico',
        'lat'            => '-46.5401',
        'lng'            => '-71.7218',
        'province_id'   => 114
        ],

        [
        'name'           => 'Chillán',
        'lat'            => '-36.6013',
        'lng'            => '-72.1093',
        'province_id'   => 84
        ],

        [
        'name'           => 'Chillán Viejo',
        'lat'            => '-36.6333',
        'lng'            => '-72.1404',
        'province_id'   => 84
        ],

        [
        'name'           => 'Chimbarongo',
        'lat'            => '-34.7552',
        'lng'            => '-70.9753',
        'province_id'   => 63
        ],

        [
        'name'           => 'Cholchol',
        'lat'            => '-38.596',
        'lng'            => '-72.8445',
        'province_id'   => 91
        ],

        [
        'name'           => 'Chonchi',
        'lat'            => '-42.6232',
        'lng'            => '-73.7739',
        'province_id'   => 102
        ],

        [
        'name'           => 'Cisnes',
        'lat'            => '-44.728',
        'lng'            => '-72.6828',
        'province_id'   => 112
        ],

        [
        'name'           => 'Cobquecura',
        'lat'            => '-36.1318',
        'lng'            => '-72.7911',
        'province_id'   => 84
        ],

        [
        'name'           => 'Cochamó',
        'lat'            => '-41.488',
        'lng'            => '-72.3038',
        'province_id'   => 101
       ],

        [
        'name'           => 'Cochrane',
        'lat'            => '-47.2494',
        'lng'            => '-72.5784',
        'province_id'   => 113
        ],

        [
        'name'           => 'Codegua',
        'lat'            => '-34.0442',
        'lng'            => '-70.5131',
        'province_id'   => 61
       ],

        [
        'name'           => 'Coelemu',
        'lat'            => '-36.4877',
        'lng'            => '-72.7022',
        'province_id'   => 84
        ],

        [
        'name'           => 'Coihaique',
        'lat'            => '-45.5758',
        'lng'            => '-72.0621',
        'province_id'   => 111
        ],

        [
        'name'           => 'Coihueco',
        'lat'            => '-36.6166',
        'lng'            => '-71.8344',
        'province_id'   => 84
        ],

        [
        'name'           => 'Coinco',
        'lat'            => '-34.2918',
        'lng'            => '-70.9706',
        'province_id'   => 61
        ],

        [
        'name'           => 'Colbún',
        'lat'            => '-35.6927',
        'lng'            => '-71.4067',
        'province_id'   => 74
        ],

        [
        'name'           => 'Colchane',
        'lat'            => '-19.2787',
        'lng'            => '-68.6343',
        'province_id'   => 14
        ],

        [
        'name'           => 'Colina',
        'lat'            => '-33.1996',
        'lng'            => '-70.6702',
        'province_id'   => 133
        ],

        [
        'name'           => 'Collipulli',
        'lat'            => '-37.9528',
        'lng'            => '-72.4323',
        'province_id'   => 92
        ],

        [
        'name'           => 'Coltauco',
        'lat'            => '-34.2498',
        'lng'            => '-71.0791',
        'province_id'   => 61
        ],

        [
        'name'           => 'Combarbalá',
        'lat'            => '-31.1764',
        'lng'            => '-70.9978',
        'province_id'   => 43
        ],

        [
        'name'           => 'Concepción',
        'lat'            => '-36.8148',
        'lng'            => '-73.0293',
        'province_id'   => 81
        ],

        [
        'name'           => 'Conchalí',
        'lat'            => '-33.3862',
        'lng'            => '-70.6727',
        'province_id'   => 31
       ],

        [
        'name'           => 'Concón',
        'lat'            => '-32.9305',
        'lng'            => '-71.5191',
        'province_id'   => 51
        ],

        [
        'name'           => 'Constitución',
        'lat'            => '-35.3309',
        'lng'            => '-72.4139',
        'province_id'   => 71
        ],

        [
        'name'           => 'Contulmo',
        'lat'            => '-38.026',
        'lng'            => '-73.2581',
        'province_id'   => 82
        ],

        [
        'name'           => 'Copiapó',
        'lat'            => '-27.3654',
        'lng'            => '-70.3314',
        'province_id'   => 31
        ],

        [
        'name'           => 'Coquimbo',
        'lat'            => '-29.968',
        'lng'            => '-71.337',
        'province_id'   => 41
        ],

        [
        'name'           => 'Coronel',
        'lat'            => '-37.0265',
        'lng'            => '-73.1498',
        'province_id'   => 81
        ],

        [
        'name'           => 'Corral',
        'lat'            => '-39.8892',
        'lng'            => '-73.433',
        'province_id'   => 141
        ],

        [
        'name'           => 'Cunco',
        'lat'            => '-38.9307',
        'lng'            => '-72.0264',
        'province_id'   => 91
       ],

        [
        'name'           => 'Curacautín',
        'lat'            => '-38.4317',
        'lng'            => '-71.8898',
        'province_id'   => 92
        ],

        [
        'name'           => 'Curacaví',
        'lat'            => '-33.4063',
        'lng'            => '-71.1333',
        'province_id'   => 135
        ],

        [
        'name'           => 'Curaco de Vélez',
        'lat'            => '-42.4404',
        'lng'            => '-73.6037',
        'province_id'   => 102
        ],

        [
        'name'           => 'Curanilahue',
        'lat'            => '-37.4759',
        'lng'            => '-73.353',
        'province_id'   => 82
        ],

        [
        'name'           => 'Curarrehue',
        'lat'            => '-39.3592',
        'lng'            => '-71.5881',
        'province_id'   => 91
        ],

        [
        'name'           => 'Curepto',
        'lat'            => '-35.091',
        'lng'            => '-72.0216',
        'province_id'   => 71
        ],

        [
        'name'           => 'Curicó',
        'lat'            => '-34.9756',
        'lng'            => '-71.2235',
        'province_id'   => 73
        ],

        [
        'name'           => 'Dalcahue',
        'lat'            => '-42.3776',
        'lng'            => '-73.6521',
        'province_id'   => 102
        ],

        [
        'name'           => 'Diego de Almagro',
        'lat'            => '-26.3771',
        'lng'            => '-70.0488',
        'province_id'   => 32
        ],

        [
        'name'           => 'Doñihue',
        'lat'            => '-34.2024',
        'lng'            => '-70.9325',
        'province_id'   => 61
        ],

        [
        'name'           => 'El Bosque',
        'lat'            => '-33.5638',
        'lng'            => '-70.6714',
        'province_id'   => 131
        ],

        [
        'name'           => 'El Carmen',
        'lat'            => '-36.8964',
        'lng'            => '-72.0218',
        'province_id'   => 84
        ],

        [
        'name'           => 'El Monte',
        'lat'            => '-33.6662',
        'lng'            => '-71.0294',
        'province_id'   => 136
        ],

        [
        'name'           => 'El Quisco',
        'lat'            => '-33.4156',
        'lng'            => '-71.6556',
        'province_id'   => 56
        ],

        [
        'name'           => 'El Tabo',
        'lat'            => '-33.4847',
        'lng'            => '-71.5862',
        'province_id'   => 56
        ],

        [
        'name'           => 'Empedrado',
        'lat'            => '-35.6213',
        'lng'            => '-72.2473',
        'province_id'   => 71
        ],

        [
        'name'           => 'Ercilla',
        'lat'            => '-38.0587',
        'lng'            => '-72.358',
        'province_id'   => 92
        ],

        [
        'name'           => 'Estación Central',
        'lat'            => '-33.4503',
        'lng'            => '-70.6751',
        'province_id'   => 131
        ],

        [
        'name'           => 'Florida',
        'lat'            => '-36.8209',
        'lng'            => '-72.6621',
        'province_id'   => 81
        ],

        [
        'name'           => 'Freire',
        'lat'            => '-38.9538',
        'lng'            => '-72.6219',
        'province_id'   => 91
       ],

        [
        'name'           => 'Freirina',
        'lat'            => '-28.5001',
        'lng'            => '-71.076',
        'province_id'   => 33
       ],

        [
        'name'           => 'Fresia',
        'lat'            => '-41.1542',
        'lng'            => '-73.4224',
        'province_id'   => 101
       ],

        [
        'name'           => 'Frutillar',
        'lat'            => '-41.1167',
        'lng'            => '-73.05',
        'province_id'   => 101
        ],

        [
        'name'           => 'Futaleufú',
        'lat'            => '-43.1859',
        'lng'            => '-71.8666',
        'province_id'   => 104
        ],

        [
        'name'           => 'Futrono',
        'lat'            => '-40.1243',
        'lng'            => '-72.393',
        'province_id'   => 142
        ],

        [
        'name'           => 'Galvarino',
        'lat'            => '-38.4085',
        'lng'            => '-72.7804',
        'province_id'   => 91
        ],

        [
        'name'           => 'General Lagos',
        'lat'            => '-17.8324',
        'lng'            => '-69.6094',
        'province_id'   => 152
        ],

        [
        'name'           => 'Gorbea',
        'lat'            => '-39.0948',
        'lng'            => '-72.6722',
        'province_id'   => 91
        ],

        [
        'name'           => 'Graneros',
        'lat'            => '-34.0709',
        'lng'            => '-70.7501',
        'province_id'   => 61
        ],

        [
        'name'           => 'Guaitecas',
        'lat'            => '-43.8781',
        'lng'            => '-73.7485',
        'province_id'   => 112
        ],

        [
        'name'           => 'Hijuelas',
        'lat'            => '-32.8671',
        'lng'            => '-71.0929',
        'province_id'   => 55
        ],

        [
        'name'           => 'Hualaihué',
        'lat'            => '-42.0967',
        'lng'            => '-72.4044',
        'province_id'   => 104
       ],

        [
        'name'           => 'Hualañé',
        'lat'            => '-34.9762',
        'lng'            => '-71.8043',
        'province_id'   => 73
        ],

        [
        'name'           => 'Hualpén',
        'lat'            => '-36.7827',
        'lng'            => '-73.1454',
        'province_id'   => 81
        ],

        [
        'name'           => 'Hualqui',
        'lat'            => '-37.0145',
        'lng'            => '-72.8662',
        'province_id'   => 81
       ],

        [
        'name'           => 'Huara',
        'lat'            => '-19.9963',
        'lng'            => '-69.7718',
        'province_id'   => 14
      ],

        [
        'name'           => 'Huasco',
        'lat'            => '-28.4518',
        'lng'            => '-71.2244',
        'province_id'   => 33
      ],

        [
        'name'           => 'Huechuraba',
        'lat'            => '-33.3665',
        'lng'            => '-70.6315',
        'province_id'   => 31
       ],

        [
        'name'           => 'Illapel',
        'lat'            => '-31.6242',
        'lng'            => '-71.1626',
        'province_id'   => 42
        ],

        [
        'name'           => 'Independencia',
        'lat'            => '-33.4196',
        'lng'            => '-70.6627',
        'province_id'   => 131
        ],

        [
        'name'           => 'Iquique',
        'lat'            => '-20.2232',
        'lng'            => '-70.1463',
        'province_id'   => 11
        ],

        [
        'name'           => 'Isla de Maipo',
        'lat'            => '-33.7536',
        'lng'            => '-70.8862',
        'province_id'   => 136
        ],

        [
        'name'           => 'Isla de Pascua',
        'lat'            => '-27.1504',
        'lng'            => '-109.423',
        'province_id'   => 52
        ],

        [
        'name'           => 'Juan Fernández',
        'lat'            => '-33.6167',
        'lng'            => '-78.8667',
        'province_id'   => 51
        ],

        [
        'name'           => 'La Cisterna',
        'lat'            => '-33.538',
        'lng'            => '-70.6612',
        'province_id'   => 131
        ],

        [
        'name'           => 'La Cruz',
        'lat'            => '-32.8258',
        'lng'            => '-71.2592',
        'province_id'   => 55
        ],

        [
        'name'           => 'La Estrella',
        'lat'            => '-34.2037',
        'lng'            => '-71.6073',
        'province_id'   => 62
        ],

        [
        'name'           => 'La Florida',
        'lat'            => '-33.5225',
        'lng'            => '-70.5952',
        'province_id'   => 131
        ],

        [
        'name'           => 'La Granja',
        'lat'            => '-33.5373',
        'lng'            => '-70.6188',
        'province_id'   => 131
        ],

        [
        'name'           => 'La Higuera',
        'lat'            => '-29.497',
        'lng'            => '-71.2656',
        'province_id'   => 41
        ],

        [
        'name'           => 'La Ligua',
        'lat'            => '-32.449',
        'lng'            => '-71.2309',
        'province_id'   => 54
        ],

        [
        'name'           => 'La Pintana',
        'lat'            => '-33.5902',
        'lng'            => '-70.6322',
        'province_id'   => 131
        ],

        [
        'name'           => 'La Reina',
        'lat'            => '-33.4565',
        'lng'            => '-70.5349',
        'province_id'   => 131
        ],

        [
        'name'           => 'La Serena',
        'lat'            => '-29.8966',
        'lng'            => '-71.2422',
        'province_id'   => 41
        ],

        [
        'name'           => 'La Unión',
        'lat'            => '-40.2951',
        'lng'            => '-73.0829',
        'province_id'   => 142
        ],

        [
        'name'           => 'Lago Ranco',
        'lat'            => '-40.312',
        'lng'            => '-72.5002',
        'province_id'   => 142
        ],

        [
        'name'           => 'Lago Verde',
        'lat'            => '-44.2236',
        'lng'            => '-71.8396',
        'province_id'   => 111
        ],

        [
        'name'           => 'Laguna Blanca',
        'lat'            => '-52.3001',
        'lng'            => '-71.1612',
        'province_id'   => 121
        ],

        [
        'name'           => 'Laja',
        'lat'            => '-37.2768',
        'lng'            => '-72.7171',
        'province_id'   => 83
        ],

        [
        'name'           => 'Lampa',
        'lat'            => '-33.2863',
        'lng'            => '-70.8789',
        'province_id'   => 133
        ],

        [
        'name'           => 'Lanco',
        'lat'            => '-39.4522',
        'lng'            => '-72.7747',
        'province_id'   => 141
        ],

        [
        'name'           => 'Las Cabras',
        'lat'            => '-34.2945',
        'lng'            => '-71.3066',
        'province_id'   => 61
        ],

        [
        'name'           => 'Las Condes',
        'lat'            => '-33.4154',
        'lng'            => '-70.5837',
        'province_id'   => 131
        ],

        [
        'name'           => 'Lautaro',
        'lat'            => '-38.5286',
        'lng'            => '-72.427',
        'province_id'   => 91
        ],

        [
        'name'           => 'Lebu',
        'lat'            => '-37.6079',
        'lng'            => '-73.6508',
        'province_id'   => 82
        ],

        [
        'name'           => 'Licantén',
        'lat'            => '-34.9591',
        'lng'            => '-72.0269',
        'province_id'   => 73
        ],

        [
        'name'           => 'Limache',
        'lat'            => '-33.0035',
        'lng'            => '-71.2613',
        'province_id'   => 58
        ],

        [
        'name'           => 'Linares',
        'lat'            => '-35.8495',
        'lng'            => '-71.585',
        'province_id'   => 74
        ],

        [
        'name'           => 'Litueche',
        'lat'            => '-34.1069',
        'lng'            => '-71.7204',
        'province_id'   => 62
        ],

        [
        'name'           => 'Llaillay',
        'lat'            => '-32.8899',
        'lng'            => '-70.8942',
        'province_id'   => 57
        ],

        [
        'name'           => 'Llanquihue',
        'lat'            => '-41.2574',
        'lng'            => '-73.0054',
        'province_id'   => 101
        ],

        [
        'name'           => 'Lo Barnechea',
        'lat'            => '-33.2993',
        'lng'            => '-70.3748',
        'province_id'   => 131
        ],

        [
        'name'           => 'Lo Espejo',
        'lat'            => '-33.5247',
        'lng'            => '-70.6916',
        'province_id'   => 131
        ],

        [
        'name'           => 'Lo Prado',
        'lat'            => '-33.4489',
        'lng'            => '-70.721',
        'province_id'   => 131
        ],

        [
        'name'           => 'Lolol',
        'lat'            => '-34.7689',
        'lng'            => '-71.6453',
        'province_id'   => 63
        ],

        [
        'name'           => 'Loncoche',
        'lat'            => '-39.3681',
        'lng'            => '-72.6315',
        'province_id'   => 91
        ],

        [
        'name'           => 'Longaví',
        'lat'            => '-35.9657',
        'lng'            => '-71.6816',
        'province_id'   => 74
        ],

        [
        'name'           => 'Lonquimay',
        'lat'            => '-38.4501',
        'lng'            => '-71.374',
        'province_id'   => 92
        ],

        [
        'name'           => 'Los Álamos',
        'lat'            => '-37.6747',
        'lng'            => '-73.3896',
        'province_id'   => 82
        ],

        [
        'name'           => 'Los Andes',
        'lat'            => '-32.8347',
        'lng'            => '-70.5971',
        'province_id'   => 53
        ],

        [
        'name'           => 'Los Ángeles',
        'lat'            => '-37.473',
        'lng'            => '-72.3507',
        'province_id'   => 83
        ],

        [
        'name'           => 'Los Lagos',
        'lat'            => '-39.8636',
        'lng'            => '-72.8124',
        'province_id'   => 141
        ],

        [
        'name'           => 'Los Muermos',
        'lat'            => '-41.3997',
        'lng'            => '-73.4651',
        'province_id'   => 101
        ],

        [
        'name'           => 'Los Sauces',
        'lat'            => '-37.9754',
        'lng'            => '-72.8288',
        'province_id'   => 92
        ],

        [
        'name'           => 'Los Vilos',
        'lat'            => '-31.9157',
        'lng'            => '-71.5107',
        'province_id'   => 42
        ],

        [
        'name'           => 'Lota',
        'lat'            => '-37.0906',
        'lng'            => '-73.1547',
        'province_id'   => 81
        ],

        [
        'name'           => 'Lumaco',
        'lat'            => '-38.1636',
        'lng'            => '-72.8918',
        'province_id'   => 92
        ],

        [
        'name'           => 'Machalí',
        'lat'            => '-34.2938',
        'lng'            => '-70.3371',
        'province_id'   => 61
       ],

        [
        'name'           => 'Macul',
        'lat'            => '-33.492',
        'lng'            => '-70.5968',
        'province_id'   => 31
       ],

        [
        'name'           => 'Máfil',
        'lat'            => '-39.6654',
        'lng'            => '-72.9575',
        'province_id'   => 141
        ],

        [
        'name'           => 'Maipú',
        'lat'            => '-33.5213',
        'lng'            => '-70.7572',
        'province_id'   => 131
        ],

        [
        'name'           => 'Malloa',
        'lat'            => '-34.4455',
        'lng'            => '-70.9449',
        'province_id'   => 61
        ],

        [
        'name'           => 'Marchihue',
        'lat'            => '-34.3979',
        'lng'            => '-71.6144',
        'province_id'   => 62
        ],

        [
        'name'           => 'María Elena',
        'lat'            => '-22.1639',
        'lng'            => '-69.4171',
        'province_id'   => 23
        ],

        [
        'name'           => 'María Pinto',
        'lat'            => '-33.5154',
        'lng'            => '-71.1191',
        'province_id'   => 135
        ],

        [
        'name'           => 'Mariquina',
        'lat'            => '-39.5399',
        'lng'            => '-72.9621',
        'province_id'   => 141
        ],

        [
        'name'           => 'Maule',
        'lat'            => '-35.5057',
        'lng'            => '-71.7069',
        'province_id'   => 71
        ],

        [
        'name'           => 'Maullín',
        'lat'            => '-41.6172',
        'lng'            => '-73.5956',
        'province_id'   => 101
        ],

        [
        'name'           => 'Mejillones',
        'lat'            => '-23.0962',
        'lng'            => '-70.4498',
        'province_id'   => 21
        ],

        [
        'name'           => 'Melipeuco',
        'lat'            => '-38.8429',
        'lng'            => '-71.6871',
        'province_id'   => 91
        ],

        [
        'name'           => 'Melipilla',
        'lat'            => '-33.6866',
        'lng'            => '-71.2139',
        'province_id'   => 135
        ],

        [
        'name'           => 'Molina',
        'lat'            => '-35.0896',
        'lng'            => '-71.2788',
        'province_id'   => 73
        ],

        [
        'name'           => 'Monte Patria',
        'lat'            => '-30.8291',
        'lng'            => '-70.6984',
        'province_id'   => 43
        ],

        [
        'name'           => 'Mostazal',
        'lat'            => '-33.9772',
        'lng'            => '-70.7092',
        'province_id'   => 61
        ],

        [
        'name'           => 'Mulchén',
        'lat'            => '-37.7147',
        'lng'            => '-72.2394',
        'province_id'   => 83
        ],

        [
        'name'           => 'Nacimiento',
        'lat'            => '-37.5011',
        'lng'            => '-72.6763',
        'province_id'   => 83
        ],

        [
        'name'           => 'Nancagua',
        'lat'            => '-34.6615',
        'lng'            => '-71.1749',
        'province_id'   => 63
        ],

        [
        'name'           => 'Natales',
        'lat'            => '-51.7219',
        'lng'            => '-72.5208',
        'province_id'   => 124
        ],

        [
        'name'           => 'Navidad',
        'lat'            => '-34.0068',
        'lng'            => '-71.8101',
        'province_id'   => 62
        ],

        [
        'name'           => 'Negrete',
        'lat'            => '-37.5974',
        'lng'            => '-72.5646',
        'province_id'   => 83
        ],

        [
        'name'           => 'Ninhue',
        'lat'            => '-36.4011',
        'lng'            => '-72.397',
        'province_id'   => 84
        ],

        [
        'name'           => 'Ñiquén',
        'lat'            => '-36.2848',
        'lng'            => '-71.8994',
        'province_id'   => 84
        ],

        [
        'name'           => 'Nogales',
        'lat'            => '-32.6923',
        'lng'            => '-71.1894',
        'province_id'   => 55
        ],

        [
        'name'           => 'Nueva Imperial',
        'lat'            => '-38.7445',
        'lng'            => '-72.9482',
        'province_id'   => 91
       ],

        [
        'name'           => 'Ñuñoa',
        'lat'            => '-33.4607',
        'lng'            => '-70.5927',
        'province_id'   => 131
        ],

        [
        'name'           => 'Olivar',
        'lat'            => '-34.2186',
        'lng'            => '-70.8355',
        'province_id'   => 61
        ],

        [
        'name'           => 'Ollagüe',
        'lat'            => '-21.2238',
        'lng'            => '-68.2529',
        'province_id'   => 22
        ],

        [
        'name'           => 'Olmué',
        'lat'            => '-33.0132',
        'lng'            => '-71.1525',
        'province_id'   => 58
        ],

        [
        'name'           => 'Osorno',
        'lat'            => '-40.5747',
        'lng'            => '-73.1319',
        'province_id'   => 103
        ],

        [
        'name'           => 'Ovalle',
        'lat'            => '-30.5942',
        'lng'            => '-71.1983',
        'province_id'   => 43
        ],

        [
        'name'           => 'O’Higgins',
        'lat'            => '-48.4643',
        'lng'            => '-72.5613',
        'province_id'   => 113
        ],

        [
        'name'           => 'Padre Hurtado',
        'lat'            => '-33.5761',
        'lng'            => '-70.8003',
        'province_id'   => 136
        ],

        [
        'name'           => 'Padre las Casas',
        'lat'            => '-38.7658',
        'lng'            => '-72.5929',
        'province_id'   => 91
        ],

        [
        'name'           => 'Paiguano',
        'lat'            => '-30.2496',
        'lng'            => '-70.3832',
        'province_id'   => 41
        ],

        [
        'name'           => 'Paillaco',
        'lat'            => '-40.0707',
        'lng'            => '-72.8708',
        'province_id'   => 141
        ],

        [
        'name'           => 'Paine',
        'lat'            => '-33.8673',
        'lng'            => '-70.7303',
        'province_id'   => 134
        ],

        [
        'name'           => 'Palena',
        'lat'            => '-43.6162',
        'lng'            => '-71.8176',
        'province_id'   => 104
        ],

        [
        'name'           => 'Palmilla',
        'lat'            => '-34.6042',
        'lng'            => '-71.3583',
        'province_id'   => 63
        ],

        [
        'name'           => 'Panguipulli',
        'lat'            => '-39.6436',
        'lng'            => '-72.3365',
        'province_id'   => 141
        ],

        [
        'name'           => 'Panquehue',
        'lat'            => '-32.8079',
        'lng'            => '-70.8428',
        'province_id'   => 57
        ],

        [
        'name'           => 'Papudo',
        'lat'            => '-32.4699',
        'lng'            => '-71.3842',
        'province_id'   => 54
        ],

        [
        'name'           => 'Paredones',
        'lat'            => '-34.6972',
        'lng'            => '-71.8978',
        'province_id'   => 62
        ],

        [
        'name'           => 'Parral',
        'lat'            => '-36.14',
        'lng'            => '-71.8244',
        'province_id'   => 74
        ],

        [
        'name'           => 'Pedro Aguirre Cerda',
        'lat'            => '-33.4891',
        'lng'            => '-70.6729',
        'province_id'   => 131
        ],

        [
        'name'           => 'Pelarco',
        'lat'            => '-35.3723',
        'lng'            => '-71.3278',
        'province_id'   => 71
        ],

        [
        'name'           => 'Pelluhue',
        'lat'            => '-35.8145',
        'lng'            => '-72.5736',
        'province_id'   => 72
        ],

        [
        'name'           => 'Pemuco',
        'lat'            => '-36.9865',
        'lng'            => '-72.0191',
        'province_id'   => 84
        ],

        [
        'name'           => 'Peñaflor',
        'lat'            => '-33.6141',
        'lng'            => '-70.8876',
        'province_id'   => 136
        ],

        [
        'name'           => 'Peñalolén',
        'lat'            => '-33.4904',
        'lng'            => '-70.5105',
        'province_id'   => 131
        ],

        [
        'name'           => 'Pencahue',
        'lat'            => '-35.3051',
        'lng'            => '-71.8284',
        'province_id'   => 71
        ],

        [
        'name'           => 'Penco',
        'lat'            => '-36.7423',
        'lng'            => '-72.998',
        'province_id'   => 81
        ],

        [
        'name'           => 'Peralillo',
        'lat'            => '-34.4593',
        'lng'            => '-71.5',
        'province_id'   => 63
        ],

        [
        'name'           => 'Perquenco',
        'lat'            => '-38.4154',
        'lng'            => '-72.3725',
        'province_id'   => 91
       ],

        [
        'name'           => 'Petorca',
        'lat'            => '-32.1965',
        'lng'            => '-70.8318',
        'province_id'   => 54
       ],

        [
        'name'           => 'Peumo',
        'lat'            => '-34.3798',
        'lng'            => '-71.1687',
        'province_id'   => 61
        ],

        [
        'name'           => 'Pica',
        'lat'            => '-20.4889',
        'lng'            => '-69.3289',
        'province_id'   => 14
        ],

        [
        'name'           => 'Pichidegua',
        'lat'            => '-34.3758',
        'lng'            => '-71.3469',
        'province_id'   => 61
        ],

        [
        'name'           => 'Pichilemu',
        'lat'            => '-34.3869',
        'lng'            => '-72.0032',
        'province_id'   => 62
        ],

        [
        'name'           => 'Pinto',
        'lat'            => '-36.6978',
        'lng'            => '-71.8934',
        'province_id'   => 84
        ],

        [
        'name'           => 'Pirque',
        'lat'            => '-33.7384',
        'lng'            => '-70.4914',
        'province_id'   => 132
        ],

        [
        'name'           => 'Pitrufquén',
        'lat'            => '-38.9829',
        'lng'            => '-72.6429',
        'province_id'   => 91
        ],

        [
        'name'           => 'Placilla',
        'lat'            => '-34.6135',
        'lng'            => '-71.0951',
        'province_id'   => 63
        ],

        [
        'name'           => 'Portezuelo',
        'lat'            => '-36.529',
        'lng'            => '-72.433',
        'province_id'   => 84
        ],

        [
        'name'           => 'Porvenir',
        'lat'            => '-53.2898',
        'lng'            => '-70.3633',
        'province_id'   => 123
        ],

        [
        'name'           => 'Pozo Almonte',
        'lat'            => '-20.2532',
        'lng'            => '-69.7848',
        'province_id'   => 14
        ],

        [
        'name'           => 'Primavera',
        'lat'            => '-52.7122',
        'lng'            => '-69.2496',
        'province_id'   => 123
        ],

        [
        'name'           => 'Providencia',
        'lat'            => '-33.4214',
        'lng'            => '-70.6033',
        'province_id'   => 131
        ],

        [
        'name'           => 'Puchuncaví',
        'lat'            => '-32.7499',
        'lng'            => '-71.396',
        'province_id'   => 51
        ],

        [
        'name'           => 'Pucón',
        'lat'            => '-39.2824',
        'lng'            => '-71.9545',
        'province_id'   => 91
        ],

        [
        'name'           => 'Pudahuel',
        'lat'            => '-33.4184',
        'lng'            => '-70.8324',
        'province_id'   => 131
        ],

        [
        'name'           => 'Puente Alto',
        'lat'            => '-33.6079',
        'lng'            => '-70.5778',
        'province_id'   => 132
        ],

        [
        'name'           => 'Puerto Montt',
        'lat'            => '-41.4633',
        'lng'            => '-72.9314',
        'province_id'   => 101
        ],

        [
        'name'           => 'Puerto Octay',
        'lat'            => '-40.9755',
        'lng'            => '-72.8833',
        'province_id'   => 103
        ],

        [
        'name'           => 'Puerto Varas',
        'lat'            => '-41.316',
        'lng'            => '-72.9836',
        'province_id'   => 101
        ],

        [
        'name'           => 'Pumanque',
        'lat'            => '-34.6052',
        'lng'            => '-71.6443',
        'province_id'   => 63
        ],

        [
        'name'           => 'Punitaqui',
        'lat'            => '-30.8256',
        'lng'            => '-71.2585',
        'province_id'   => 43
        ],

        [
        'name'           => 'Punta Arenas',
        'lat'            => '-53.1641',
        'lng'            => '-70.9305',
        'province_id'   => 121
        ],

        [
        'name'           => 'Puqueldón',
        'lat'            => '-42.6015',
        'lng'            => '-73.6714',
        'province_id'   => 102
        ],

        [
        'name'           => 'Purén',
        'lat'            => '-38.0326',
        'lng'            => '-73.0728',
        'province_id'   => 92
        ],

        [
        'name'           => 'Purranque',
        'lat'            => '-40.9085',
        'lng'            => '-73.1653',
        'province_id'   => 103
        ],

        [
        'name'           => 'Putaendo',
        'lat'            => '-32.6279',
        'lng'            => '-70.7165',
        'province_id'   => 57
        ],

        [
        'name'           => 'Putre',
        'lat'            => '-18.1798',
        'lng'            => '-69.5544',
        'province_id'   => 152
        ],

        [
        'name'           => 'Puyehue',
        'lat'            => '-40.6806',
        'lng'            => '-72.599',
        'province_id'   => 103
        ],

        [
        'name'           => 'Queilén',
        'lat'            => '-42.9001',
        'lng'            => '-73.4827',
        'province_id'   => 102
        ],

        [
        'name'           => 'Quellón',
        'lat'            => '-43.1156',
        'lng'            => '-73.6172',
        'province_id'   => 102
        ],

        [
        'name'           => 'Quemchi',
        'lat'            => '-42.1426',
        'lng'            => '-73.475',
        'province_id'   => 102
        ],

        [
        'name'           => 'Quilaco',
        'lat'            => '-37.6799',
        'lng'            => '-72.0074',
        'province_id'   => 83
        ],

        [
        'name'           => 'Quilicura',
        'lat'            => '-33.3551',
        'lng'            => '-70.7278',
        'province_id'   => 131
        ],

        [
        'name'           => 'Quilleco',
        'lat'            => '-37.4335',
        'lng'            => '-71.8761',
        'province_id'   => 83
        ],

        [
        'name'           => 'Quillón',
        'lat'            => '-36.7383',
        'lng'            => '-72.469',
        'province_id'   => 84
        ],

        [
        'name'           => 'Quillota',
        'lat'            => '-32.8793',
        'lng'            => '-71.2508',
        'province_id'   => 55
        ],

        [
        'name'           => 'Quilpué',
        'lat'            => '-33.0492',
        'lng'            => '-71.4435',
        'province_id'   => 58
        ],

        [
        'name'           => 'Quinchao',
        'lat'            => '-42.472',
        'lng'            => '-73.4898',
        'province_id'   => 102
        ],

        [
        'name'           => 'Quinta de Tilcoco',
        'lat'            => '-34.367',
        'lng'            => '-71.0096',
        'province_id'   => 61
        ],

        [
        'name'           => 'Quinta Normal',
        'lat'            => '-33.428',
        'lng'            => '-70.6964',
        'province_id'   => 131
        ],

        [
        'name'           => 'Quintero',
        'lat'            => '-32.7872',
        'lng'            => '-71.5274',
        'province_id'   => 51
        ],

        [
        'name'           => 'Quirihue',
        'lat'            => '-36.2839',
        'lng'            => '-72.5414',
        'province_id'   => 84
        ],

        [
        'name'           => 'Rancagua',
        'lat'            => '-34.162',
        'lng'            => '-70.741',
        'province_id'   => 61
        ],

        [
        'name'           => 'Ránquil',
        'lat'            => '-36.6485',
        'lng'            => '-72.6064',
        'province_id'   => 84
        ],

        [
        'name'           => 'Rauco',
        'lat'            => '-34.9295',
        'lng'            => '-71.3111',
        'province_id'   => 73
        ],

        [
        'name'           => 'Recoleta',
        'lat'            => '-33.4173',
        'lng'            => '-70.6303',
        'province_id'   => 131
        ],

        [
        'name'           => 'Renaico',
        'lat'            => '-37.6654',
        'lng'            => '-72.5687',
        'province_id'   => 92
        ],

        [
        'name'           => 'Renca',
        'lat'            => '-33.4141',
        'lng'            => '-70.7129',
        'province_id'   => 131
        ],

        [
        'name'           => 'Rengo',
        'lat'            => '-34.4017',
        'lng'            => '-70.8561',
        'province_id'   => 61
        ],

        [
        'name'           => 'Requínoa',
        'lat'            => '-34.3533',
        'lng'            => '-70.6797',
        'province_id'   => 61
        ],

        [
        'name'           => 'Retiro',
        'lat'            => '-36.0458',
        'lng'            => '-71.7591',
        'province_id'   => 74
        ],

        [
        'name'           => 'Rinconada',
        'lat'            => '-32.8765',
        'lng'            => '-70.7085',
        'province_id'   => 53
        ],

        [
        'name'           => 'Río Bueno',
        'lat'            => '-40.333',
        'lng'            => '-72.9513',
        'province_id'   => 142
        ],

        [
        'name'           => 'Río Claro',
        'lat'            => '-35.2827',
        'lng'            => '-71.2665',
        'province_id'   => 71
        ],

        [
        'name'           => 'Río Hurtado',
        'lat'            => '-30.2603',
        'lng'            => '-70.6668',
        'province_id'   => 43
        ],

        [
        'name'           => 'Río Ibáñez',
        'lat'            => '-46.2938',
        'lng'            => '-71.9357',
        'province_id'   => 114
        ],

        [
        'name'           => 'Río Negro',
        'lat'            => '-40.7829',
        'lng'            => '-73.2319',
        'province_id'   => 103
        ],

        [
        'name'           => 'Río Verde',
        'lat'            => '-52.5814',
        'lng'            => '-71.5128',
        'province_id'   => 121
        ],

        [
        'name'           => 'Romeral',
        'lat'            => '-34.9634',
        'lng'            => '-71.1205',
        'province_id'   => 73
        ],

        [
        'name'           => 'Saavedra',
        'lat'            => '-38.7803',
        'lng'            => '-73.3897',
        'province_id'   => 91
        ],

        [
        'name'           => 'Sagrada Familia',
        'lat'            => '-34.9949',
        'lng'            => '-71.3798',
        'province_id'   => 73
        ],

        [
        'name'           => 'Salamanca',
        'lat'            => '-31.7737',
        'lng'            => '-70.9717',
        'province_id'   => 42
        ],

        [
        'name'           => 'San Antonio',
        'lat'            => '-33.5812',
        'lng'            => '-71.613',
        'province_id'   => 56
        ],

        [
        'name'           => 'San Bernardo',
        'lat'            => '-33.5913',
        'lng'            => '-70.702',
        'province_id'   => 134
        ],

        [
        'name'           => 'San Carlos',
        'lat'            => '-36.4221',
        'lng'            => '-71.9594',
        'province_id'   => 84
        ],

        [
        'name'           => 'San Clemente',
        'lat'            => '-35.534',
        'lng'            => '-71.4865',
        'province_id'   => 71
        ],

        [
        'name'           => 'San Esteban',
        'lat'            => '-32.693',
        'lng'            => '-70.3703',
        'province_id'   => 53
        ],

        [
        'name'           => 'San Fabián',
        'lat'            => '-36.5538',
        'lng'            => '-71.5487',
        'province_id'   => 84
        ],

        [
        'name'           => 'San Felipe',
        'lat'            => '-32.7464',
        'lng'            => '-70.7489',
        'province_id'   => 57
        ],

        [
        'name'           => 'San Fernando',
        'lat'            => '-34.584',
        'lng'            => '-70.9874',
        'province_id'   => 63
        ],

        [
        'name'           => 'San Gregorio',
        'lat'            => '-52.3135',
        'lng'            => '-69.6842',
        'province_id'   => 121
        ],

        [
        'name'           => 'San Ignacio',
        'lat'            => '-36.8186',
        'lng'            => '-71.9883',
        'province_id'   => 84
        ],

        [
        'name'           => 'San Javier',
        'lat'            => '-35.6035',
        'lng'            => '-71.7362',
        'province_id'   => 74
        ],

        [
        'name'           => 'San Joaquín',
        'lat'            => '-33.4961',
        'lng'            => '-70.6245',
        'province_id'   => 131
        ],

        [
        'name'           => 'San José de Maipo',
        'lat'            => '-33.6921',
        'lng'            => '-70.1325',
        'province_id'   => 132
        ],

        [
        'name'           => 'San Juan de la Costa',
        'lat'            => '-40.5156',
        'lng'            => '-73.3997',
        'province_id'   => 103
        ],

        [
        'name'           => 'San Miguel',
        'lat'            => '-33.5017',
        'lng'            => '-70.6489',
        'province_id'   => 131
        ],

        [
        'name'           => 'San Nicolás',
        'lat'            => '-36.4996',
        'lng'            => '-72.2126',
        'province_id'   => 84
        ],

        [
        'name'           => 'San Pablo',
        'lat'            => '-40.4118',
        'lng'            => '-73.0102',
        'province_id'   => 103
        ],

        [
        'name'           => 'San Pedro',
        'lat'            => '-33.8779',
        'lng'            => '-71.4609',
        'province_id'   => 135
        ],

        [
        'name'           => 'San Pedro de Atacama',
        'lat'            => '-22.9157',
        'lng'            => '-68.2004',
        'province_id'   => 22
        ],

        [
        'name'           => 'San Pedro de la Paz',
        'lat'            => '-36.8635',
        'lng'            => '-73.1085',
        'province_id'   => 81
        ],

        [
        'name'           => 'San Rafael',
        'lat'            => '-35.2942',
        'lng'            => '-71.5254',
        'province_id'   => 71
        ],

        [
        'name'           => 'San Ramón',
        'lat'            => '-33.5349',
        'lng'            => '-70.6392',
        'province_id'   => 31
       ],

        [
        'name'           => 'San Rosendo',
        'lat'            => '-37.2021',
        'lng'            => '-72.748',
        'province_id'   => 83
        ],

        [
        'name'           => 'San Vicente',
        'lat'            => '-34.4381',
        'lng'            => '-71.0792',
        'province_id'   => 61
        ],

        [
        'name'           => 'Santa Bárbara',
        'lat'            => '-37.6627',
        'lng'            => '-72.0184',
        'province_id'   => 83
        ],

        [
        'name'           => 'Santa Cruz',
        'lat'            => '-34.6383',
        'lng'            => '-71.367',
        'province_id'   => 63
        ],

        [
        'name'           => 'Santa Juana',
        'lat'            => '-37.1726',
        'lng'            => '-72.9352',
        'province_id'   => 81
        ],

        [
        'name'           => 'Santa María',
        'lat'            => '-32.7446',
        'lng'            => '-70.654',
        'province_id'   => 57
       ],

        [
        'name'           => 'Santiago Centro',
        'lat'            => '-33.4417',
        'lng'            => '-70.6541',
        'province_id'   => 31
       ],

        [
        'name'           => 'Santo Domingo',
        'lat'            => '-33.7076',
        'lng'            => '-71.6301',
        'province_id'   => 56
       ],

        [
        'name'           => 'Sierra Gorda',
        'lat'            => '-22.8921',
        'lng'            => '-69.3203',
        'province_id'   => 21
        ],

        [
        'name'           => 'Talagante',
        'lat'            => '-33.6643',
        'lng'            => '-70.9296',
        'province_id'   => 136
        ],

        [
        'name'           => 'Talca',
        'lat'            => '-35.4288',
        'lng'            => '-71.6607',
        'province_id'   => 71
        ],

        [
        'name'           => 'Talcahuano',
        'lat'            => '-36.7364',
        'lng'            => '-73.1047',
        'province_id'   => 81
        ],

        [
        'name'           => 'Taltal',
        'lat'            => '-25.4054',
        'lng'            => '-70.4826',
        'province_id'   => 21
       ],

        [
        'name'           => 'Temuco',
        'lat'            => '-38.7362',
        'lng'            => '-72.5989',
        'province_id'   => 91
       ],

        [
        'name'           => 'Teno',
        'lat'            => '-34.8701',
        'lng'            => '-71.0895',
        'province_id'   => 73
        ],

        [
        'name'           => 'Teodoro Schmidt',
        'lat'            => '-38.9989',
        'lng'            => '-73.093',
        'province_id'   => 91
        ],

        [
        'name'           => 'Tierra Amarilla',
        'lat'            => '-27.4877',
        'lng'            => '-70.2696',
        'province_id'   => 31
        ],

        [
        'name'           => 'Tiltil',
        'lat'            => '-33.0655',
        'lng'            => '-70.8465',
        'province_id'   => 133
        ],

        [
        'name'           => 'Timaukel',
        'lat'            => '-54.2877',
        'lng'            => '-69.1644',
        'province_id'   => 123
        ],

        [
        'name'           => 'Tirúa',
        'lat'            => '-38.3315',
        'lng'            => '-73.3794',
        'province_id'   => 82
        ],

        [
        'name'           => 'Tocopilla',
        'lat'            => '-22.0858',
        'lng'            => '-70.193',
        'province_id'   => 23
        ],

        [
        'name'           => 'Toltén',
        'lat'            => '-39.2022',
        'lng'            => '-73.2004',
        'province_id'   => 91
        ],

        [
        'name'           => 'Tomé',
        'lat'            => '-36.6177',
        'lng'            => '-72.9579',
        'province_id'   => 81
        ],

        [
        'name'           => 'Torres del Paine',
        'lat'            => '-50.9896',
        'lng'            => '-73.0893',
        'province_id'   => 124
        ],

        [
        'name'           => 'Tortel',
        'lat'            => '-47.8242',
        'lng'            => '-73.5645',
        'province_id'   => 113
        ],

        [
        'name'           => 'Traiguén',
        'lat'            => '-38.2509',
        'lng'            => '-72.6647',
        'province_id'   => 92
        ],

        [
        'name'           => 'Treguaco',
        'lat'            => '-36.4095',
        'lng'            => '-72.6603',
        'province_id'   => 84
        ],

        [
        'name'           => 'Tucapel',
        'lat'            => '-37.2901',
        'lng'            => '-71.9491',
        'province_id'   => 83
        ],

        [
        'name'           => 'Valdivia',
        'lat'            => '-39.8201',
        'lng'            => '-73.2457',
        'province_id'   => 141
        ],

        [
        'name'           => 'Vallenar',
        'lat'            => '-28.5777',
        'lng'            => '-70.7566',
        'province_id'   => 33
        ],

        [
        'name'           => 'Valparaíso',
        'lat'            => '-33.0436',
        'lng'            => '-71.6231',
        'province_id'   => 51
        ],

        [
        'name'           => 'Vichuquén',
        'lat'            => '-34.8594',
        'lng'            => '-72.0074',
        'province_id'   => 73
        ],

        [
        'name'           => 'Victoria',
        'lat'            => '-38.2336',
        'lng'            => '-72.3329',
        'province_id'   => 92
        ],

        [
        'name'           => 'Vicuña',
        'lat'            => '-30.0287',
        'lng'            => '-70.7108',
        'province_id'   => 41
        ],

        [
        'name'           => 'Vilcún',
        'lat'            => '-38.6701',
        'lng'            => '-72.2238',
        'province_id'   => 91
        ],

        [
        'name'           => 'Villa Alegre',
        'lat'            => '-35.6868',
        'lng'            => '-71.6704',
        'province_id'   => 74
        ],

        [
        'name'           => 'Villa Alemana',
        'lat'            => '-33.0429',
        'lng'            => '-71.3724',
        'province_id'   => 58
        ],

        [
        'name'           => 'Villarrica',
        'lat'            => '-39.2803',
        'lng'            => '-72.2182',
        'province_id'   => 91
        ],

        [
        'name'           => 'Viña del Mar',
        'lat'            => '-33.0445',
        'lng'            => '-71.5224',
        'province_id'   => 51
        ],

        [
        'name'           => 'Vitacura',
        'lat'            => '-33.3863',
        'lng'            => '-70.5698',
        'province_id'   => 131
        ],

        [
        'name'           => 'Yerbas Buenas',
        'lat'            => '-35.6882',
        'lng'            => '-71.5636',
        'province_id'   => 74
        ],

        [
        'name'           => 'Yumbel',
        'lat'            => '-37.0964',
        'lng'            => '-72.5562',
        'province_id'   => 83
        ],

        [
        'name'           => 'Yungay',
        'lat'            => '-37.122',
        'lng'            => '-72.0132',
        'province_id'   => 84
        ],

        [
        'name'           => 'Zapallar',
        'lat'            => '-32.5933',
        'lng'            => '-71.3686',
        'province_id'   => 54
        ],

    ]);

    }
}