<?php namespace Backend\Models;

use Eloquent;

class Page extends Eloquent {

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
    'build_from' => 'title',
    'save_to'    => 'slug',
    'on_update'  => true,
    'include_trashed' => true
  );

  /**
  *
  * Fillable
  *
  **/
  public $fillable = array('title','subtitle','summary','content','template','position','parent_id');

  /**
  *
  * Children
  *
  **/
  public function children()
  {
    return $this->hasMany('Backend\Models\Page', 'parent_id');
  }

}