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

	$redis = RedisMotherFucker::connection();

	$redis->set('name', 'Taylor');

	$name = $redis->get('name');

	//dd($name);

	var_dump(Session::all());

	if(!Session::get('name')){

		return View::make('login');
	}else {

		dd(Session::get('name'));
	}
	
});

Route::post('login', function ()
{

	$name = Input::get('id');

	Session::put('username', $name);
});

// supprime les items enregistrés
Route::get('flush', function(){

	Session::flush();
});