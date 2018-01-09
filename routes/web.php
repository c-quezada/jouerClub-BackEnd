<?php
use GuzzleHttp\Client;

Route::get('/', function () {
    
	// iniciando Guzzle
	$client = new Client([
	    'base_uri' => 'https://apis.modernizacion.cl/dpa/',	//url base
	    'timeout'  => 2.0, //tiempo de respuesta
	    'verify' => false
	]);

	$response = $client->request('GET', 'comunas'); //GET verbo HTTP, segundo parametro es la url interna que se agrega posteriormente de la url base, para acceder a los datos. En este caso se realizara una peticion GET a "https://jsonplaceholder.typicode.com/regiones"

	//dd($response->getBody()->getContents()); //inspeccionar variable $response, funcion getBody para obtener el cuerpo del json "STREAM", y con la funcion getContents obtenermos los datos 

	$regiones = json_decode( $response->getBody()->getContents() ); // se transforma a un array y lo retorna

	return view('welcome')->with('regiones', $regiones);

});
