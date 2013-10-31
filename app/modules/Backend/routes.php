<?php 

Route::get('login', 'Backend\Controllers\SessionsController@create');
Route::get('logout', 'Backend\Controllers\SessionsController@destroy');
Route::resource('sessions', 'Backend\Controllers\SessionsController', ['only' => ['create','store','destroy']]);

Route::group(array('prefix' => 'backend', 'before' => 'auth'), function()
{
	Route::get('/', array('as' => 'backend.home', function()
	{
		return View::make('Backend::dashboard.index');
	}));

	Route::post('pages/update-single/{id}', array('as' => 'backend.pages.updateSingle', 'uses' => 'Backend\Controllers\PagesController@updateSingle'));
	Route::resource('pages', 'Backend\Controllers\PagesController');
	Route::post('posts/update-single/{id}', array('as' => 'backend.posts.updateSingle', 'uses' => 'Backend\Controllers\PostsController@updateSingle'));
	Route::resource('posts', 'Backend\Controllers\PostsController');
	Route::resource('gallery', 'Backend\Controllers\GalleryController');

});