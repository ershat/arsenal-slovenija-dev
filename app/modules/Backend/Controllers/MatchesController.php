<?php namespace Backend\Controllers;

use View, Input, Redirect;
use Backend\Repositories\MatchRepositoryInterface;
use Backend\Validators\MatchValidator;

class MatchesController extends \BaseController {

	protected $match;
	protected $validator;

	public function __construct(MatchRepositoryInterface $match, MatchValidator $validator)
	{
		$this->match = $match;
		$this->validator = $validator;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
    return View::make('Backend::matches.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
    return View::make('Backend::matches.create');
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

		$match = $this->match->create(Input::except('_token'));

		return Redirect::route('backend.matches.show', $match->id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$match = $this->match->findById($id);

    return View::make('Backend::matches.show')->withMatch($match)->withId($id);
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

		$match = $this->match->update(Input::except('_token'), $id);

		return Redirect::route('backend.matches.show', $match->id);
	}

	/**
	 * Update the specified part of resource in storage.
	 *
	 * @param  int  $id
	 * @return JSON
	 */
	public function updateSingle($id)
	{
		$matchUpdate = $this->match->updateSingle(Input::get('name'), Input::get('value'), $id);

		return array('status' => $matchUpdate);
	}	

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$match = $this->match->findById($id);

		$match->delete();

		return Redirect::route('backend.matches.index');
	}

}
