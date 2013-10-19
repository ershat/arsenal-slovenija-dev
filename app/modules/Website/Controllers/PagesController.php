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
		if (isset($slug5)) {
			$page = $this->page->findBySlug($slug5);
		}

		if (isset($slug4) and !isset($page)) {
			$page = $this->page->findBySlug($slug4);
		}

		if (isset($slug3) and !isset($page)) {
			$page = $this->page->findBySlug($slug3);
		}

		if (isset($slug2) and !isset($page)) {
			$page = $this->page->findBySlug($slug2);
		}

		if (!isset($page)) {
			$page = $this->page->findBySlug($slug);		
		}

		return View::make($page->template)->withPage($page);
	}

}