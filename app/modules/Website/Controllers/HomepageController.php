<?php namespace Website\Controllers;

use View, Input, Redirect, Request;
use Website\Services\Post\Repository;

class HomepageController extends \BaseController {

	protected $post;

	public function __construct(Repository $post)
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
		$featured = $this->post->featured(3);
		$posts = $this->post->paginated(15);

		return View::make('Website::homepage.index', compact('featured', 'posts'));
	}

}