<?php namespace Website\Controllers;

use View, Input, Redirect, Request;
use Website\Repositories\PageRepositoryInterface;
use Website\Repositories\PostRepositoryInterface;

class PagesController extends \BaseController {

	protected $page;
	protected $post;

	public function __construct(PageRepositoryInterface $page, PostRepositoryInterface $post)
	{
		$this->page = $page;
		$this->post = $post;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug, $slug2 = null, $slug3 = null, $slug4 = null, $slug5 = null)
	{
		$slugs = array();
		$pages = array();

		if (isset($slug)) {
			$pages[] = $this->page->findBySlug($slug);
			$slugs[] = $slug;
		}

		if (isset($slug2)) {
			$pages[] = $this->page->findBySlug($slug2);
			$slugs[] = $slug2;
		}

		if (isset($slug3)) {
			$pages[] = $this->page->findBySlug($slug3);
			$slugs[] = $slug3;
		}

		if (isset($slug4)) {
			$pages[] = $this->page->findBySlug($slug4);
			$slugs[] = $slug4;
		}

		if (isset($slug5)) {
			$pages[] = $this->page->findBySlug($slug5);
			$slugs[] = $slug5;
		}

		// If template is posts.list we also get the posts with the subtitle as the type of the posts
		if ($pages[count($pages) - 1]->template == 'Website::posts.list') {
			View::share('posts', $this->post->getPaginated(10, $pages[count($pages) - 1]->subtitle));
		}

		return View::make($pages[count($pages) - 1]->template)->withPages($pages)->withPage($pages[count($pages) - 1])->withSlugs($slugs);
	}

}