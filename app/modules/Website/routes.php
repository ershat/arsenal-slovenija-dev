<?php

// Route::get('add-user', function(){
// 	Backend\Models\User::create([
// 		'username' => 'saraja.sribar',
// 		'email' => 'saraja.sribar@gmail.com',
// 		'password' => Hash::make('arsenal2014'),
// 		'name' => 'Saraja Šribar',
// 		'type' => 'editor'
// 	]);
// 	exit;
// });

// Migration
Route::get('migration', 'MigrationController@show');

Route::get('/', array('as' => 'home', 'uses' => 'Website\Controllers\HomepageController@index'));

Route::get('novice/{slug}', array('as' => 'posts.show', 'uses' => 'Website\Controllers\PostsController@show'));
Route::get('tekme/{slug}', array('as' => 'matches.show', 'uses' => 'Website\Controllers\MatchesController@show'));
Route::get('tekme', array('as' => 'matches.index', 'uses' => 'Website\Controllers\MatchesController@index'));
Route::get('premier-liga', array('as' => 'standings.index', 'uses' => 'Website\Controllers\StandingsController@index'));
Route::get('arsenal/legende-kluba/{slug}', array('as' => 'posts.legends.show', 'uses' => 'Website\Controllers\PostsController@show'));
Route::get('reportaze-in-slike/{slug}', array('as' => 'posts.reports.show', 'uses' => 'Website\Controllers\PostsController@show'));

Route::get('{slug}/{slug2?}/{slug3?}/{slug4?}/{slug5?}', array('uses' => 'Website\Controllers\PagesController@show'));

// App::error(function(Exception $e){
// 	if (!App::environment('local')) {
// 		return Redirect::route('home');
// 	}
// });