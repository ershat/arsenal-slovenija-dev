<?php namespace Backend\Models;

use Eloquent;

class Post extends Eloquent {

  /**
  *
  * Soft deletes
  *
  **/
  public $softDelete = true;

	/**
	*
	* Sluggable
	*
	**/
	public static $sluggable = array(
    'build_from' => array('title'),
    'save_to'    => 'slug',
    // 'on_update'  => true,
    'include_trashed' => true
  );

  /**
  *
  * Fillable
  *
  **/
  public $fillable = array('type','title','subtitle','summary','content','photo','tags','author','author_alias', 'created_at', 'updated_at','match_id');

  /**
  *
  * Author
  *
  **/
  public function post_author()
  {
    return $this->belongsTo('Backend\Models\User', 'author');
  }

  /**
  *
  * Scope search
  *
  **/
  public function scopeSearch($query, $keyword)
  {
    return $query->where('title', 'like', "%$".$keyword."%")->orWhere('content', 'like', '%'.$keyword.'%');
  }

  /**
  *
  * Scope skip first N items
  *
  **/
  public function scopeSkipToNumber($query, $number)
  {
    $featuredItems = Post::orderBy('created_at', 'desc')->take($number)->lists('id');

    return $query->whereNotIn('posts.id', $featuredItems);
  }
  

  /**
  *
  * Images
  *
  **/
  public function gallery()
  {
    return $this->morphMany('Backend\Models\Image', 'imageable');
  }

}