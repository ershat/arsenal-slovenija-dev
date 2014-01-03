<?php namespace Backend\Models;

use Eloquent;

class Match extends Eloquent {

	/**
	*
	* Sluggable
	*
	**/
	public static $sluggable = array(
    'build_from' => array('home_team', 'away_team', 'time'),
    'save_to'    => 'slug',
    // 'on_update'  => true,
    // 'include_trashed' => true
  );

  /**
  *
  * Fillable
  *
  **/
  public $fillable = array('scorers', 'home_team','home_team_image','home_goals','away_team','away_team_image','away_goals','season','time','competition', 'created_at', 'updated_at');

  /**
  *
  * Scope search
  *
  **/
  public function scopeSearch($query, $keyword)
  {
    return $query->where('home_team', 'like', "%$".$keyword."%")->orWhere('away_team', 'like', '%'.$keyword.'%');
  }

  /**
  *
  * Scope skip first N items
  *
  **/
  public function scopeSkipToNumber($query, $number)
  {
    $featuredItems = Match::orderBy('created_at', 'desc')->take($number)->lists('id');

    return $query->whereNotIn('posts.id', $featuredItems);
  }

  /**
  *
  * Posts
  *
  **/
  public function posts()
  {
    return $this->hasMany('Backend\Models\Post');
  }
  
}