<?php namespace Backend\Controllers;

use View, Input, Redirect;
use Backend\Repositories\ImageRepositoryInterface;

class GalleryController extends \BaseController {

	protected $image;

	public function __construct(ImageRepositoryInterface $image)
	{
		$this->image = $image;
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$image = $this->image->create(Input::file('file'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$image = $this->image->findById($id);

		unlink(public_path().'/'.$image->folder.'/'.$image->filename);
		unlink(public_path().'/'.$image->folder.'/big_'.$image->filename);
		unlink(public_path().'/'.$image->folder.'/med_'.$image->filename);
		unlink(public_path().'/'.$image->folder.'/sm_'.$image->filename);

		$image->delete();

		return Redirect::to(route('backend.posts.show', $image->imageable_id).'#gallery');
	}

}
