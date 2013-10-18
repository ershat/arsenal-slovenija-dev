<?php namespace Backend\Controllers;

use View, Input, Redirect;
use Backend\Repositories\PostRepositoryInterface;
use Backend\Validators\PostValidator;

class PostsController extends \BaseController {

	protected $post;
	protected $validator;

	public function __construct(PostRepositoryInterface $post, PostValidator $validator)
	{
		$this->post = $post;
		$this->validator = $validator;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
    return View::make('Backend::posts.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
    return View::make('Backend::posts.create');
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

		$post = $this->post->create(Input::except('_token'), Input::file('photo'));

		return Redirect::route('backend.posts.show', $post->id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = $this->post->findById($id);

    return View::make('Backend::posts.show')->withPost($post)->withId($id);
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

		$post = $this->post->update(Input::except('_token'), $id, Input::file('photo'));

		return Redirect::route('backend.posts.show', $post->id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = $this->post->findById($id);

		$post->delete();

		return Redirect::route('backend.posts.index');
	}

}
