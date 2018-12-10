<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sports')->insert([
        	
	        [
	        'id'             =>  1,	
	        'name'           => 'Acondicionamiento físico',
	        'description'    => 'El acondicionamiento físico es el desarrollo de las cualidades físicas mediante el 
	                             ejercicio, para obtener un estado general saludable.'
	        ],

	        [
	        'id'             =>  2,	
	        'name'           => 'Aikido',
	        'description'    => 'El Aikido es un arte marcial tradicional moderno del Japón.'
	        ],

	        [
	        'id'             =>  3,	
	        'name'           => 'Ajedrez',
	        'description'    => 'Juego de mesa entre dos personas que disponen de 16 piezas móviles que se colocan
	                             sobre un tablero​ dividido en 64 casillas'
	        ],

	        [
	        'id'             =>  4,	
	        'name'           => 'Apnea',
	        'description'    => 'Prueba deportiva en que se mide la capacidad de estar bajo el agua a pulmón libre.'
	        ],

	        [
	        'id'             =>  5,	
	        'name'           => 'Artes marciales mixtas',
	        'description'    => 'Combinación de técnicas provenientes de varias artes marciales tradicionales y 
	                             modernas con el fin de emplearla para la competición en el deporte de combate, o 
	                             para la defensa personal no armada.'
	        ],

	        [
	        'id'             =>  6,	
	        'name'           => 'Automovilismo',
	        'description'    => 'Deporte que consiste en participar en pruebas de velocidad, habilidad o 
	                             resistencia conduciendo un automóvil.'
	        ],

	        [
	        'id'             =>  7,	
	        'name'           => 'Backagammon',
	        'description'    => 'El backgammon es un juego de mesa para dos jugadores que aúna el azar con 
	                             profundos conocimientos estratégicos.'
	        ],

	        [
	        'id'             =>  8,	
	        'name'           => 'Bádminton',
	        'description'    => 'Deporte de raqueta en el que se enfrentan dos jugadores o dos parejas. A diferencia
	                             de otros deportes de raqueta, en el bádminton no se juega con pelota, sino con 
	                             un "volante".'
	        ],

	        [
	        'id'             =>  9,	
	        'name'           => 'Básquetbol',
	        'description'    => 'Deporte de equipo, jugado entre dos equipos de cinco jugadores cada uno durante 
	                             doce minutos cada uno. El objetivo del equipo es anotar puntos introduciendo un 
	                             balón por la canasta,'
	        ],

	        [
	        'id'             =>  10,	
	        'name'           => 'Béisbol',
	        'description'    => 'Deporte de equipo, jugado entre dos conjuntos de nueve jugadores cada uno.'
	        ],

	        [
	        'id'             =>  11,	
	        'name'           => 'Billar',
	        'description'    => 'Deporte de precisión que se practica impulsando con un taco un número variable de 
	                             bolas, en una mesa con tablero de pizarra forrada de paño.'
	        ],

	        [
	        'id'             =>  12,	
	        'name'           => 'BMX',
	        'description'    => 'Disciplina del ciclismo que se practica con bicicletas todoterreno con ruedas de 
	                             20 pulgadas de diámetro.'
	        ],

	        [
	        'id'             =>  13,	
	        'name'           => 'Bodyboard',
	        'description'    => 'Deporte basado en el deslizamiento sobre la superficie de la ola con una tabla,
	                             normalmente de polietileno o polipropileno.'
	        ],

	        [
	        'id'             =>  14,	
	        'name'           => 'Bowling',
	        'description'    => 'Deporte de salón que consiste en derribar un conjunto de piezas de madera 
	                            (bolos o pinos) mediante el lanzamiento de una pesada bola contra ellos.'
	        ],

	        [
	        'id'             =>  15,	
	        'name'           => 'Boxeo',
	        'description'    => 'Conocido como box, es un deporte de combate en el que dos contrincantes luchan
	                             utilizando únicamente sus puños con guantes, golpeando a su adversario de la 
	                             cintura hacia arriba, dentro de un cuadrilátero diseñado para tal fin'
	        ],

	        [
	        'id'             =>  16,	
	        'name'           => 'Buceo',
	        'description'    => 'Acto por medio del cual el ser humano se sumerge en cuerpos de agua, ya sea el mar,
	                             un lago, un río, etc.'
	        ],

	        [
	        'id'             =>  17,	
	        'name'           => 'Capoeira',
	        'description'    => 'Arte marcial afro-brasileño que combina facetas de danza, música y acrobacias.'
	        ],

	        [
	        'id'             =>  18,	
	        'name'           => 'Carreras en silla de rueda',
	        'description'    => 'Son carreras en sillas de ruedas tanto en pista como en carreteras.  Es una de 
	                             las formas más resaltantes del atletismo paralímpico.'
	        ],

	        [
	        'id'             =>  19,	
	        'name'           => 'Carreras de vallas',
	        'description'    => 'Los competidores deben superar una serie de barreras de madera y metal (o plástico 
	        	                 y vidrio) llamadas vallas.'
	        ],

	        [
	        'id'             =>  20,	
	        'name'           => 'Carreras de velocidad',
	        'description'    => 'Carrera a pie que tiene una distancia predeterminada en 60, 100, 200, 400 y 
	                             800 metros en pistas.'
	        ],

	        [
	        'id'             =>  21,	
	        'name'           => 'Cheerleading',
	        'description'    => 'Descripción del deporte aquí...'
	        ],

	        [
	        'id'             =>  22,	
	        'name'           => 'Ciclismo',
	        'description'    => 'Descripción del deporte aquí...'
	        ],

	        [
	        'id'             =>  23,	
	        'name'           => 'Corrida libre',
	        'description'    => 'Descripción del deporte aquí...'
	        ],

	        [
	        'id'             =>  24,	
	        'name'           => 'Crossbol',
	        'description'    => 'Descripción del deporte aquí...'
	        ],

	        [
	        'id'             =>  25,	
	        'name'           => 'Crossfit',
	        'description'    => 'Descripción del deporte aquí...'
	        ],

	        [
	        'id'             =>  26,	
	        'name'           => 'Dominó',
	        'description'    => 'Descripción del deporte aquí...'
	        ],

	        [
	        'id'             =>  27,	
	        'name'           => 'Equitación',
	        'description'    => 'Descripción del deporte aquí...'
	        ],

	        [
	        'id'             =>  28,	
	        'name'           => 'Escalada',
	        'description'    => 'Descripción del deporte aquí...'
	        ],

	        [
	        'id'             =>  29,	
	        'name'           => 'Esgrima',
	        'description'    => 'Descripción del deporte aquí...'
	        ],

	        [
	        'id'             =>  30,	
	        'name'           => 'Fútbol',
	        'description'    => 'Descripción del deporte aquí...'
	        ],

	        [
	        'id'             =>  31,	
	        'name'           => 'Fútbol americano',
	        'description'    => 'Descripción del deporte aquí...'
	        ]
	    ]);

    }
}
    

