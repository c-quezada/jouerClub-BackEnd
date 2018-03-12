<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sportFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sportsFields')->insert([

	        [
	        'name'           => 'Cancha Villa Pacífico',
	        'address'        => 'Calle San Ambrosio 328-440',
	        'time_begin'     => '14:00',
	        'time_end'       => '23:00',
	        'lat'            => '-33.2081',
	        'lng'            => '-70.6833',
	        'commune_id'     =>  60,
	        'cluber_id'      =>  1
	        ], 

	        [
	        'name'           => 'Cancha Pobl. Luis Cruz Martinez',
	        'address'        => 'Calle 10 de julio 770-794',
	        'time_begin'     => '14:00',
	        'time_end'       => '23:00',
	        'lat'            => '-33.2110',
	        'lng'            => '-70.6841',
	        'commune_id'     =>  60,
	        'cluber_id'      =>  1
	        ], 

	        [
	        'name'           => 'Cancha Pobl. Los Robles',
	        'address'        => 'Calle Copihue 211-281',
	        'time_begin'     => '14:00',
	        'time_end'       => '23:00',
	        'lat'            => '-33.2114',
	        'lng'            => '-70.6774',
	        'commune_id'     =>  60,
	        'cluber_id'      =>  1
	        ], 

	        [
	        'name'           => 'Cancha "La dos"',
	        'address'        => 'Calle Exequiel Moraga',
	        'time_begin'     => '14:00',
	        'time_end'       => '23:00',
	        'lat'            => '-33.2081',
	        'lng'            => '-70.6735',
	        'commune_id'     =>  60,
	        'cluber_id'      =>  1
	        ], 

	        [
	        'name'           => 'Cancha Club San Luis',
	        'address'        => 'Calle Alpatacal',
	        'time_begin'     => '',
	        'time_end'       => '',
	        'lat'            => '-33.2085',
	        'lng'            => '-70.6627',
	        'commune_id'     =>  60,
	        'cluber_id'      =>  1
	        ],

	        [
	        'name'           => 'Cancha Pobl. Las Aguílas',
	        'address'        => 'Calle Tucapel 44-82',
	        'time_begin'     => '14:00',
	        'time_end'       => '23:00',
	        'lat'            => '-33.2057',
	        'lng'            => '-70.6805',
	        'commune_id'     =>  60,
	        'cluber_id'      =>  1
	        ], 

	        [
	        'name'           => 'Parque San Miguel',
	        'address'        => 'Camino Viejo 317-503',
	        'time_begin'     => '8:30',
	        'time_end'       => '21:00',
	        'lat'            => '-33.2069',
	        'lng'            => '-70.6850',
	        'commune_id'     =>  60,
	        'cluber_id'      =>  1
	        ], 

	        [
	        'name'           => 'Cancha Club San José',
	        'address'        => 'Carretera Gral. San Martín',
	        'time_begin'     => '',
	        'time_end'       => '',
	        'lat'            => '-33.2339',
	        'lng'            => '-70.6940',
	        'commune_id'     =>  60,
	        'cluber_id'      =>  1
	        ], 

	        [
	        'name'           => 'Complejo Tercer Tiempo',
	        'address'        => 'Carretera Gral. San Martín',
	        'time_begin'     => '10:00',
	        'time_end'       => '23:00',
	        'lat'            => '-33.2352',
	        'lng'            => '-70.6950',
	        'commune_id'     =>  60,
	        'cluber_id'      =>  1
	        ], 

	        [
	        'name'           => 'Complejo Autopista-Santa Elena',
	        'address'        => 'Carretera Gral. San Martín',
	        'time_begin'     => '10:00',
	        'time_end'       => '23:00',
	        'lat'            => '-33.2368',
	        'lng'            => '-70.6967',
	        'commune_id'     =>  60,
	        'cluber_id'      =>  1
	        ],  

	        [
	        'name'           => 'Complejo "Entreamigos"',
	        'address'        => 'Calle San Vicente de Lo Arcaya',
	        'time_begin'     => '10:00',
	        'time_end'       => '23:00',
	        'lat'            => '-33.2605',
	        'lng'            => '-70.6961',
	        'commune_id'     =>  60,
	        'cluber_id'      =>  1
	        ], 

	        [
	        'name'           => 'Cancha Autopista Los Libertadores',
	        'address'        => 'Carretera Gral. San Martín',
	        'time_begin'     => '10:00',
	        'time_end'       => '23:00',
	        'lat'            => '-33.2331',
	        'lng'            => '-70.6913',
	        'commune_id'     =>  60,
	        'cluber_id'      =>  1
	        ], 

	        [
	        'name'           => 'Complejo deportivo "Rancho de Tennis"',
	        'address'        => 'Calle San Luis',
	        'time_begin'     => '10:00',
	        'time_end'       => '22:00',
	        'lat'            => '-33.2148',
	        'lng'            => '-70.6690',
	        'commune_id'     =>  60,
	        'cluber_id'      =>  1
	        ], 

	        [
	        'name'           => 'Cancha Club Santa Filomena',
	        'address'        => 'Calle Santa Filomena',
	        'time_begin'     => '',
	        'time_end'       => '',
	        'lat'            => '-33.1913',
	        'lng'            => '-70.6511',
	        'commune_id'     =>  60,
	        'cluber_id'      =>  1
	        ], 

	        [
	        'name'           => 'Cancha Club Esmeralda',
	        'address'        => 'Carretera Gral. San Martín',
	        'time_begin'     => '',
	        'time_end'       => '',
	        'lat'            => '-33.1828',
	        'lng'            => '-70.6507',
	        'commune_id'     =>  60,
	        'cluber_id'      =>  1
	        ],  

	        [
	        'name'           => 'Cancha Pobl. Glorias Navales',
	        'address'        => 'Calle Carlos Condell',
	        'time_begin'     => '14:00',
	        'time_end'       => '23:00',
	        'lat'            => '-33.1860',
	        'lng'            => '-70.6543',
	        'commune_id'     =>  60,
	        'cluber_id'      =>  1
	        ], 

	        [
	        'name'           => 'Cancha Liceo Rigoberto Fontt',
	        'address'        => 'Calle Fontt',
	        'time_begin'     => '10:00',
	        'time_end'       => '23:00',
	        'lat'            => '-33.1959',
	        'lng'            => '-70.6751',
	        'commune_id'     =>  60,
	        'cluber_id'      =>  1
	        ], 

	        [
	        'name'           => 'Cancha Copec',
	        'address'        => 'Carretera Gral. San Martín',
	        'time_begin'     => '14:00',
	        'time_end'       => '23:00',
	        'lat'            => '-33.2001',
	        'lng'            => '-70.6729',
	        'commune_id'     =>  60,
	        'cluber_id'      =>  1
	        ], 

	        [
	        'name'           => 'Cancha Gendarmería Colina',
	        'address'        => 'Carretera Gral. San Martín',
	        'time_begin'     => '10:00',
	        'time_end'       => '23:00',
	        'lat'            => '-33.1987',
	        'lng'            => '-70.6716',
	        'commune_id'     =>  60,
	        'cluber_id'      =>  1
	        ], 

	        [
	        'name'           => 'Cancha "Huracanes I"',
	        'address'        => 'Carretera Gral. San Martín',
	        'time_begin'     => '14:00',
	        'time_end'       => '23:00',
	        'lat'            => '-33.1992',
	        'lng'            => '-70.6723',
	        'commune_id'     =>  60,
	        'cluber_id'      =>  1
	        ],  

	        [
	        'name'           => 'Cancha "Huracanes II"',
	        'address'        => 'Carretera Gral. San Martín',
	        'time_begin'     => '14:00',
	        'time_end'       => '23:00',
	        'lat'            => '-33.1972',
	        'lng'            => '-70.6708',
	        'commune_id'     =>  60,
	        'cluber_id'      =>  1
	        ], 

	        [
	        'name'           => 'Complejo "Ponderosa"',
	        'address'        => 'Calle Huaca 2-76',
	        'time_begin'     => '10:00',
	        'time_end'       => '23:00',
	        'lat'            => '-33.2022',
	        'lng'            => '-70.6819',
	        'commune_id'     =>  60,
	        'cluber_id'      =>  1
	        ] 
	    ]);
    }
}
