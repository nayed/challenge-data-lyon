<?php

use Illuminate\Http\Response;

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recherche', 'RechercheController@index');

Route::post('/recherche/rechercher', 'RechercheController@rechercher');
//Route::post('/recherche/rechercher', ['uses' => 'RechercheController@rechercher', 'as' => 'home']);

// create auto-completion
Route::get('/autocomplete', function () {
    return view('autocomplete');
});

// get Towns data
Route::get('/town', 'AutoCompleteController@getTown');



// test
Route::get('/testGeo', 'GeocodeController@index');