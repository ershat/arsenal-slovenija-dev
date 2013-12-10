<?php 

// Migration
Route::get('migration', 'MigrationController@show');

Route::get('/', array('as' => 'home', 'uses' => 'Website\Controllers\HomepageController@index'));

Route::get('novice/{slug}', array('as' => 'posts.show', 'uses' => 'Website\Controllers\PostsController@show'));
Route::get('arsenal/legende-kluba/{slug}', array('as' => 'posts.legends.show', 'uses' => 'Website\Controllers\PostsController@show'));
Route::get('reportaze-in-slike/{slug}', array('as' => 'posts.reports.show', 'uses' => 'Website\Controllers\PostsController@show'));

Route::get('{slug}/{slug2}/{slug3}/{slug4}/{slug5}', array('uses' => 'Website\Controllers\PagesController@show'));
Route::get('{slug}/{slug2}/{slug3}/{slug4}', array('uses' => 'Website\Controllers\PagesController@show'));
Route::get('{slug}/{slug2}/{slug3}', array('uses' => 'Website\Controllers\PagesController@show'));
Route::get('{slug}/{slug2}', array('uses' => 'Website\Controllers\PagesController@show'));
Route::get('{slug}', array('uses' => 'Website\Controllers\PagesController@show'));

App::error(function(Exception $e){
	return Redirect::route('home');
});