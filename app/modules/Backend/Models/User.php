<?php namespace Backend\Models;

use Illuminate\Auth\UserInterface;
use Eloquent;

class User extends Eloquent implements UserInterface {

  public $fillable = ['username', 'email', 'password'];

	/**
   * Get the unique identifier for the user.
   *
   * @return mixed
   */
  public function getAuthIdentifier()
  {
    return $this->getKey();
  }

  /**
   * Get the password for the user.
   *
   * @return string
   */
  public function getAuthPassword()
  {
    return $this->password;
  }

}