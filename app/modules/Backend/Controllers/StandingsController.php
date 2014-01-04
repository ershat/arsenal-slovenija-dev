<?php namespace Backend\Controllers;

use View, Input, Redirect, DB;
use Backend\Models\Standing;

class StandingsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
    return View::make('Backend::standings.index')->withStandings(Standing::orderBy('points', 'desc')->orderBy(DB::raw('(standings.for - standings.against)'), 'desc')->get());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
    return View::make('Backend::standings.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Standing::create(Input::except('_token'));

		return Redirect::route('backend.standings.index');
	}

	/**
	 * Update the specified part of resource in storage.
	 *
	 * @param  int  $id
	 * @return JSON
	 */
	public function updateSingle($id)
	{
		$name = Input::get('name');
		$value = Input::get('value');

		$standing = Standing::find($id);
		$standing->{$name} = $value;

		return array('status' => $standing->save());
	}	

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Standing::destroy($id);

		return Redirect::route('backend.standings.index');
	}

}
