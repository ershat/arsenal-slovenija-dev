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

	if (file_exists(public_path().'images/posts/'  . implode('/', $photoArray))) {
		var_dump('expression');
	}

	return '/images/posts/' . implode('/', $photoArray);

}

/**
*
* Display Facebook share link
*
**/
function display_fb_share_link($shareTitle, $shareUri = null)
{
	if (!isset($shareUri)) {
		$shareUri = URL::current();
	}

	echo "window.open(
		      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('".$shareUri."') +'&t=' + encodeURIComponent('".$shareTitle."'), 
		      'facebook-share-dialog', 
		      'width=626,height=436,top='+((screen.height - 436) / 2)+',left='+((screen.width - 626)/2 )); 
		    return false;";
}

/**
*
* Display Twitter share link
*
**/
function display_tw_share_link($shareTitle, $shareUri = null)
{
	if (!isset($shareUri)) {
		$shareUri = URL::current();
	}

	echo "window.open(
          'https://twitter.com/share?url='+encodeURIComponent('".$shareUri."')+'&text='+encodeURIComponent('".$shareTitle."') + '&count=none/', 
          'twitter-share-dialog', 
          'width=626,height=436,top='+((screen.height - 436) / 2)+',left='+((screen.width - 626)/2 )); 
        return false;";
}

/**
*
* Display Google Plus share link
*
**/
function display_gplus_share_link($shareTitle, $shareUri = null)
{
	if (!isset($shareUri)) {
		$shareUri = URL::current();
	}

	echo "window.open(
          'https://plus.google.com/share?url='+encodeURIComponent('".$shareUri."')+'&text='+encodeURIComponent('".$shareTitle."') + '&count=none/', 
          'twitter-share-dialog', 
          'width=626,height=436,top='+((screen.height - 436) / 2)+',left='+((screen.width - 626)/2 )); 
        return false;";
}