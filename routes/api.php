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
Route::resource('jouers.meetings', 'Jouer\JouerMeetingController', ['only' => ['index']]);
Route::resource('jouers.workshops', 'Jouer\JouerWorkshopController', ['only' => ['index']]);

/**
 * Jouer Skills
 */
Route::name('jouers.addSkill')->post('jouers/{jouer}/addskill/{skills}', 'Jouer\JouerSkillController@addSkill');
Route::name('jouers.removeSkill')->post('jouers/{jouer}/removeskill/{skills}', 'Jouer\JouerSkillController@removeSkill');

/**
 * Jouer Teams
 */
Route::name('jouers.addTeam')->post('jouers/{jouer}/addteam/{teams}', 'Jouer\JouerTeamController@addTeam');
Route::name('jouers.removeTeam')->post('jouers/{jouer}/removeteam/{teams}', 'Jouer\JouerTeamController@removeTeam');

/**
 * Jouer Meetings
 */
Route::name('jouers.addMeeting')->post('jouers/{jouer}/addmeeting/{meetings}', 'Jouer\JouerMeetingController@addMeeting');
Route::name('jouers.removeMeeting')->post('jouers/{jouer}/removemeeting/{meetings}', 'Jouer\JouerMeetingController@removeMeeting');

/**
 * Jouer Workshops
 */
Route::name('jouers.addWorkshop')->post('jouers/{jouer}/addworkshop/{workshops}', 'Jouer\JouerWorkshopController@addWorkshop');
Route::name('jouers.removeWorkshop')->post('jouers/{jouer}/removeworkshop/{workshops}', 
	'Jouer\JouerWorkshopController@removeWorkshop');

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
Route::resource('courts.meetings', 'Court\CourtMeetingsController', ['only' => ['index']]);

/**
 * SportFields
 */
Route::resource('sportfields', 'SportField\SportFieldController', ['except' => ['create', 'edit']]);
Route::resource('sportfields.courts', 'SportField\SportFieldCourtsController', ['only' => ['index']]);
Route::resource('sportfields.meetings', 'SportField\SportFieldMeetingsController', ['only' => ['index']]);

/**
 * Facilities
 */
Route::resource('facilities', 'Facility\FacilityController', ['except' => ['create', 'edit']]);
Route::resource('facilities.maintenance', 'Facility\FacilityMaintenanceController', ['only' => ['index']]);

/**
 * Maintenance
 */
Route::resource('maintenances', 'Maintenance\MaintenanceController', ['except' => ['create', 'edit']]);


/**
 * Workshops
 */
Route::resource('workshops', 'Workshop\WorkshopController', ['except' => ['create', 'edit']]);
Route::resource('workshops.participants', 'Workshop\WorkshopDetailController', ['only' => ['index']]);

/**
 * Teams
 */
Route::resource('teams', 'Team\TeamController', ['except' => ['create', 'edit']]);
Route::resource('teams.jouers', 'Team\TeamJouerController', ['only' => ['index']]);

/**
 * Sports
 */
Route::resource('sports', 'Sport\SportController', ['except' => ['create', 'edit']]);
Route::resource('sports.branches', 'Sport\SportBranchController', ['only' => ['index']]);

/**
 * Branches
 */
Route::resource('branches', 'Branch\BranchController', ['except' => ['create', 'edit']]);

/**
 * Meetings
 */
Route::resource('meetings', 'Meeting\MeetingController', ['except' => ['create', 'edit']]);
Route::resource('meetings.participants', 'Meeting\MeetingDetailController', ['only' => ['index']]);

/**
 * Skills
 */
Route::resource('skills', 'Skill\SkillController', ['except' => ['create', 'edit']]);

/**
 * Tokens
 */
Route::post('oauth/token', '\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken');
