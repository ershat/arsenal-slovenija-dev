<?php namespace Backend\Models;

use Eloquent;

class Page extends Eloquent {

	/**
	*
	* Sluggable
	*
	**/
	public static $sluggable = array(
    'build_from' => 'title',
    'save_to'    => 'slug',
  );

  /**
  *
  * Fillable
  *
  **/
  public $fillable = array('title','subtitle','summary','content','template');

}