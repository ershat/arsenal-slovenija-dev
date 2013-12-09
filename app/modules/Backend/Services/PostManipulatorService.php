<?php namespace Backend\Services;

use Backend\Repositories\PostRepositoryInterface;
use Backend\Services\ImageUploadService as ImageUpload;
use Backend\Models\Post as Post;


class PostManipulatorService {

	protected $post;

	public function __construct(PostRepositoryInterface $post)
	{
		$this->post = $post;
	}

	public static function create($input, $file = null)
	{
		if (isset($file)) {
			$input['photo'] = ImageUpload::make(public_path().'/images/posts/', $file);
		}

		if (empty($input['author_alias'])) {
			$input['author_alias'] = \Auth::user()->name;
		}

		$post = Post::create($input);

		return $post;
	}

	public static function update($input, $id, $file = null)
	{
		$post = Post::find($id);

		if (isset($file) or isset($input['delete_photo'])) {
			$post->photo = null;
			$post->save();
		}

		if (isset($file)) {
			$input['photo'] = ImageUpload::make(public_path().'/images/posts/', $file);
		}

		if (empty($input['author_alias'])) {
			$input['author_alias'] = \Auth::user()->name;
		}

		$post->update($input);

		return $post;
	}

	public static function updateSingle($name, $value, $id)
	{
		$post = Post::find($id);
		$post->{$name} = $value;

		return $post->save();
	}


}