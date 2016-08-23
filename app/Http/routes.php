<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

/* Route about the account */
Route::put('/account/{id}/password', 'AccountController@editPassword');
Route::get('/account/{id}', 'AccountController@show');
Route::put('/account/{id}', 'AccountController@update');

/* Route to register a user */
Route::post('/register-test', 'UsersController@createUser');


Route::get('/send/{id}', ['uses' =>'EmailController@sendEmailReminder', 'as'=>'reminderEmail']);
