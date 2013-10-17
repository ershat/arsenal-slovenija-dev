<?php 

Route::get('login', 'Backend\Controllers\SessionsController@create');
Route::get('logout', 'Backend\Controllers\SessionsController@destroy');
Route::resource('sessions', 'Backend\Controllers\SessionsController', ['only' => ['create','store','destroy']]);

Route::group(array('prefix' => 'backend', 'before' => 'auth'), function()
{
	Route::get('/', function()
	{
		var_dump(Auth::user()->email);
		echo '<a href="/logout">Logout</a>';
	});
});