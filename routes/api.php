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
Route::resource('users', 'User\UserController'); 


/**
 * Clubers
 */
Route::resource('clubers', 'Cluber\CluberController'); 

/**
 * Coaches
 */
Route::resource('coaches', 'Coach\CoachController'); 

/**
 * Curts
 */
Route::resource('curts', 'Curt\CurtController'); 


/**
 * SportFields
 */
Route::resource('sportfields', 'SportField\SportFieldController'); 

