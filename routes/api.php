<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
*/

/*
Primer parametro: Nombre del recurso, Segundo parametro: Ubicacion del controlador, Tercer parametro: funciones a mostrar
*/

/**
 * Users
 */
Route::resource('users', 'User\UserController', ['only' => ['index', 'show']]); 


/**
 * Clubers
 */
Route::resource('clubers', 'Cluber\CluberController', ['only' => ['index', 'show']]); 

/**
 * Coaches
 */
Route::resource('coaches', 'Coach\CoachController', ['only' => ['index', 'show']]); 

/**
 * Curts
 */
Route::resource('curts', 'Curt\CurtController', ['only' => ['index', 'show']]); 


/**
 * SportFields
 */
Route::resource('sportfields', 'SportField\SportFieldController', ['only' => ['index', 'show']]); 

