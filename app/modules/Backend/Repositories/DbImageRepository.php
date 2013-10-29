<?php namespace Backend\Repositories;

use Backend\Models\Image as Image;
use Backend\Services\ImageUploadService as ImageUpload;

class DbImageRepository implements ImageRepositoryInterface {

	public function create($file)
	{
		return ImageUpload::make_ajax(public_path().'/images/gallery/', $file);
	}

	public function findById($id)
	{
		return Image::find($id);
	}

}