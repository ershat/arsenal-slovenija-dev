<?php 

/**
*
* Display a image from a post
*
**/
function display_post_image($photo, $size = 'med_')
{
	if (!isset($photo)) {
		return asset('/assets/module/website/images/default_post_image.jpg');
	}

	$photoArray = explode('/', $photo);
	$photoArray[count($photoArray)-1] = $size.$photoArray[count($photoArray) -1];

	return '/images/posts/' . implode('/', $photoArray);

}