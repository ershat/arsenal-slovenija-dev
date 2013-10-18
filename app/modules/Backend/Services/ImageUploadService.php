<?php namespace Backend\Services;

use Image;

class ImageUploadService
{

	public static function make($start_path, $input)
	{

		$currentDate = date('Y/m/d');
		$start_path .= $currentDate;

		if (!file_exists($start_path)){
			mkdir($start_path, 0777, true);
		}

		$sizes = new \stdClass;
		$sizes->big = 960;
		$sizes->med = 300;
		$sizes->sm = 130;

		// Check photo name for duplicates
		$originalPhotoName = $input->getClientOriginalName();

		if (file_exists($start_path . '/' . $originalPhotoName)){
			$originalPhotoName = date('YmdHis') . '_' . $originalPhotoName;
		}

		// Move the file
		$input->move($start_path, $originalPhotoName);

		// Get the photo and resize it
		$photo = Image::make($start_path . '/' . $originalPhotoName);

		$photo->resize($sizes->big, null, true)->save($start_path.'big_'.$originalPhotoName);
		$photo->resize($sizes->med, null, true)->save($start_path.'med_'.$originalPhotoName);
		$photo->resize($sizes->sm, null, true)->save($start_path.'sm_'.$originalPhotoName);

		return $currentDate.'/'.$originalPhotoName;
	}

}