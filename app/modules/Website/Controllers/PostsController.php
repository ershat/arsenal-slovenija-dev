<?php namespace Website\Controllers;

use View, Input, Redirect;
use Website\Repositories\PostRepositoryInterface;

class PostsController extends \BaseController {

	protected $post;

	public function __construct(PostRepositoryInterface $post)
	{
		$this->post = $post;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		return View::make('Website::posts.index')->withPost($this->post->findBySlug($slug));
	}

}