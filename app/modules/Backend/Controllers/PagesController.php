<?php namespace Backend\Controllers;

use View, Input, Redirect;
use Backend\Repositories\PageRepositoryInterface;
use Backend\Validators\PageValidator;

class PagesController extends \BaseController {

	protected $page;
	protected $validator;

	public function __construct(PageRepositoryInterface $page, PageValidator $validator)
	{
		$this->page = $page;
		$this->validator = $validator;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
    return View::make('Backend::pages.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
    return View::make('Backend::pages.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (!$this->validator->validate(Input::all())) {
			return Redirect::back()->withErrors($this->validator->errors())->withInput();
		}

		$page = $this->page->create(Input::except('_token'));

		return Redirect::route('backend.pages.show', $page->id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$page = $this->page->findById($id);

    return View::make('Backend::pages.show')->withPage($page)->withId($id);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		if (!$this->validator->validate(Input::all())) {
			return Redirect::back()->withErrors($this->validator->errors())->withInput();
		}

		$page = $this->page->update(Input::except('_token'), $id);

		return Redirect::route('backend.pages.show', $page->id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$page = $this->page->findById($id);

		$page->delete();

		return Redirect::route('backend.pages.index');
	}

}
