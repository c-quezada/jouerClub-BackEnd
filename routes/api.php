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
Route::resource('users', 'User\UserController', ['except' => ['create', 'edit']]);
Route::name('verify')->get('users/verify/{token}', 'User\UserController@verify');
Route::name('resend')->get('users/{user}/resend', 'User\UserController@resend');

/**
 * Jouers
 */
Route::resource('jouers', 'Jouer\JouerController', ['only' => ['index', 'show']]); 
Route::resource('jouers.skills', 'Jouer\JouerSkillController', ['only' => ['index']]);
Route::resource('jouers.teams', 'Jouer\JouerTeamController', ['only' => ['index']]);

/**
 * Clubers
 */
Route::resource('clubers', 'Cluber\CluberController', ['only' => ['index', 'show']]); 
Route::resource('clubers.sportfields', 'Cluber\CluberSportFieldsController', ['only' => ['index']]); 

/**
 * Coaches
 */
Route::resource('coaches', 'Coach\CoachController', ['only' => ['index', 'show']]); 
Route::resource('coaches.workshops', 'Coach\CoachWorkshopsController', ['only' => ['index']]); 

/**
 * Courts
 */
Route::resource('courts', 'Court\CourtController', ['except' => ['create', 'edit']]); 
Route::resource('courts.facilities', 'Court\CourtFacilitiesController', ['only' => ['index']]); 
Route::resource('courts.branches', 'Court\CourtBranchesController', ['only' => ['index']]); 


/**
 * SportFields
 */
Route::resource('sportfields', 'SportField\SportFieldController', ['except' => ['create', 'edit']]); 
Route::resource('sportfields.courts', 'SportField\SportFieldCourtsController', ['only' => ['index']]); 


/**
 * Facilities
 */
Route::resource('facilities', 'Facility\FacilityController', ['except' => ['create', 'edit']]);
Route::resource('facilities.maintenance', 'Facility\FacilityMaintenanceController', ['only' => ['index']]); 

/**
 * Maintenance
 */
Route::resource('maintenance', 'Maintenance\MaintenanceController', ['except' => ['create', 'edit']]);


/**
 * Workshops
 */
Route::resource('workshops', 'Workshop\WorkshopController', ['except' => ['create', 'edit']]);

/**
 * Teams
 */
Route::resource('teams', 'Team\TeamController', ['except' => ['create', 'edit']]);
Route::resource('teams.jouers', 'Team\TeamJouerController', ['only' => ['index']]);

/**
 * Sports
 */
Route::resource('sports', 'Sport\SportController', ['except' => ['create', 'edit']]);

/**
 * Skills
 */
Route::resource('skills', 'Skill\SkillController', ['except' => ['create', 'edit']]);


