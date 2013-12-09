<?php 

/**
*
* Display a bootstrap fake row for margin
*
**/
function fake_row()
{
	echo '<div class="row"><div class="col-md-12">&nbsp;</div></div>';
}

/**
*
* Check if admin
*
**/
function isAdmin()
{
	if (Auth::user()->type == 'admin') {
		return true;
	}

	return false;
}