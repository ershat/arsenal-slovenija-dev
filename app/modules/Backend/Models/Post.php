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
    'on_update'  => true,
    'include_trashed' => true
  );

  /**
  *
  * Fillable
  *
  **/
  public $fillable = array('type','title','subtitle','summary','content','photo','tags','author','author_alias');

  /**
  *
  * Author
  *
  **/
  public function post_author()
  {
    return $this->belongsTo('Backend\Models\User', 'author');
  }

}