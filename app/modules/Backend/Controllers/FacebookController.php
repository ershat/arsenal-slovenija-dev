<?php namespace Backend\Controllers;

use View, Input, Redirect;
use Config;
use Backend\Repositories\PostRepositoryInterface;

class FacebookController extends \BaseController {

	protected $post;
	protected $validator;

	public function __construct(PostRepositoryInterface $post)
	{
		$this->post = $post;
	}

	public function post($postId)
	{

		$post = $this->post->findById($postId);

		$params = [
			'message' => $post->title,
			'name' => $post->title,
			'link' => 'http://'.$_SERVER['SERVER_NAME'].'/novice/'.$post->slug,
		];

		if (!empty($post->subtitle)) {
			$params['caption'] = $post->subtitle;
		}

		if (!empty($post->summary)) {
			$params['description'] = $post->summary;
		} else {
			$params['description'] = \Str::limit(strip_tags($post->content), 100, '...');
		}

		if (!empty($post->photo)) {
			$params['picture'] = 'http://'.$_SERVER['SERVER_NAME'].'/images/posts/'.$post->photo;
		}

		echo '
			<!-- bootstrap css -->
			<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
			<script>
				jQuery(document).ready(function($) {
					
					$.post(
					"https://graph.facebook.com/'.Config::get('facebook.pageId').'/feed?access_token='.Config::get('facebook.accessToken').'",
					'.json_encode($params).',
					function(data)
					{
						window.close();
					});

				});
			</script>

			<div class="alert alert-info">Posting on Facebook. Please wait...</div>
		';

	}

}