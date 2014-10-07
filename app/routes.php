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
	//return View::make('hello');

	$twitter =  Twitter::getUserTimeline(array('screen_name' => 'lemondefr', 'count' => 20, 'format' => 'json'));

	$tweet = json_decode($twitter);

	dd($tweet);
});
