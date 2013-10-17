<?php 

Route::get('login', 'Backend\Controllers\SessionsController@create');
Route::get('logout', 'Backend\Controllers\SessionsController@destroy');
Route::resource('sessions', 'Backend\Controllers\SessionsController', ['only' => ['create','store','destroy']]);

Route::get('backend', function()
{
	var_dump(Auth::user()->email);
	echo '<a href="/logout">Logout</a>';
})->before('auth');