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

// Route::get('/', function () {
// 	$people = ['Nguyen','Huy','Hoang'];
//     return view('welcome',compact('people'));
// });

// Route::get('about', function () {
//     // return view('about');
// 	return view('about');
// });

// Route::get('home', 'PagesController@home');
Route::get('cards', 'CardsController@index');
Route::get('cards/{card}', 'CardsController@show');
