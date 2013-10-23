<?php namespace Website\Controllers;

use View, Input, Redirect, Request;
use Website\Repositories\PageRepositoryInterface;

class PagesController extends \BaseController {

	protected $page;

	public function __construct(PageRepositoryInterface $page)
	{
		$this->page = $page;
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

		return View::make($pages[count($pages) - 1]->template)->withPages($pages)->withPage($pages[count($pages) - 1])->withSlugs($slugs);
	}

}