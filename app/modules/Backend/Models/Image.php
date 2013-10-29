<?php namespace Backend\Models;

use Eloquent;

class Image extends Eloquent {

	public $table = 'gallery';

  /*
  *
  * Fillable
  *
  **/
  public $fillable = array('folder', 'filename', 'imageable_id', 'imageable_type');

  /**
  *
  * Polymorphic
  *
  **/
  public function imageable()
  {
    return $this->morphTo();
  }
}