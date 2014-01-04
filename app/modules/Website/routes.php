<?php 

// Migration
Route::get('migration', 'MigrationController@show');

Route::get('/', array('as' => 'home', 'uses' => 'Website\Controllers\HomepageController@index'));

Route::get('novice/{slug}', array('as' => 'posts.show', 'uses' => 'Website\Controllers\PostsController@show'));
Route::get('tekme/{slug}', array('as' => 'matches.show', 'uses' => 'Website\Controllers\MatchesController@show'));
Route::get('tekme', array('as' => 'matches.index', 'uses' => 'Website\Controllers\MatchesController@index'));
Route::get('arsenal/legende-kluba/{slug}', array('as' => 'posts.legends.show', 'uses' => 'Website\Controllers\PostsController@show'));
Route::get('reportaze-in-slike/{slug}', array('as' => 'posts.reports.show', 'uses' => 'Website\Controllers\PostsController@show'));

Route::get('{slug}/{slug2}/{slug3}/{slug4}/{slug5}', array('uses' => 'Website\Controllers\PagesController@show'));
Route::get('{slug}/{slug2}/{slug3}/{slug4}', array('uses' => 'Website\Controllers\PagesController@show'));
Route::get('{slug}/{slug2}/{slug3}', array('uses' => 'Website\Controllers\PagesController@show'));
Route::get('{slug}/{slug2}', array('uses' => 'Website\Controllers\PagesController@show'));
Route::get('{slug}', array('uses' => 'Website\Controllers\PagesController@show'));

// App::error(function(Exception $e){
// 	if (!App::environment('local')) {
// 		return Redirect::route('home');
// 	}
// });