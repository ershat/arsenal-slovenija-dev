<?php namespace Backend\Models;

use Eloquent;

class Standing extends Eloquent {

  /**
  *
  * Fillable
  *
  **/
  public $fillable = array('position', 'team','played','won','drawn','lost','for','against','points', 'created_at', 'updated_at');
  
}