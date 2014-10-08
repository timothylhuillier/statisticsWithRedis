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

	return View::make('login');
});

Route::post('login', function ()
{

	$id = Input::get('id');

	Session::put('id', $id);

	dd(Session::get('id'));
});