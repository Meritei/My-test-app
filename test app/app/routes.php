<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::get('profile', function()

     {


return "welcome.Your email address is " . Auth::user()->email;



     });





Route::get('login', 'SessionsController@create');

Route::get('logout', 'SessionsController@destroy'); 

Route::resource('session', 'SessionsController');




