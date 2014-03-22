<?php 

Route::get('test', function(){
	var_dump('Testing the shit out of this');
});

/**
 * Routing for the backend
 */
Route::group([], function(){
	$namespace = 'backend.';
});

/**
 * Routing for the website
 */
Route::group([], function(){
	$namespace = 'website.';
});