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
include_once app_path().'/Http/Routers/routes.php';

Route::group(['middleware' => ['web','auth']],function(){

	$this->get('/', function () { 
		return redirect()->route('stbenilde.dashboard.index');
	});


});

Route::auth();
