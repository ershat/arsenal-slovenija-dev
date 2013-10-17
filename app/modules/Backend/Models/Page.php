<?php namespace Backend\Models;

use Eloquent;

class Page extends Eloquent {

	public static $sluggable = array(
    'build_from' => 'title',
    'save_to'    => 'slug',
  );
	
}