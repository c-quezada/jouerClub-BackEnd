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
Route::resource('clubers.sportfields', 'Cluber\CluberSportFieldsController'); 

/**
 * Coaches
 */
Route::resource('coaches', 'Coach\CoachController'); 

/**
 * Courts
 */
Route::resource('courts', 'Court\CourtController'); 
Route::resource('courts.facilities', 'Court\CourtFacilitiesController'); 


/**
 * SportFields
 */
Route::resource('sportfields', 'SportField\SportFieldController'); 
Route::resource('sportfields.courts', 'SportField\SportFieldCourtsController'); 


/**
 * Facilities
 */
Route::resource('facilities', 'Facility\FacilityController');

