<?php namespace Website\Controllers;

use View, Input, Redirect;
use Website\Repositories\PostRepositoryInterface;

class HomepageController extends \BaseController {

	protected $post;

	public function __construct(PostRepositoryInterface $post)
	{
		$this->post = $post;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('Website::homepage.index')->withPosts($this->post->getPaginated(10));
	}

}