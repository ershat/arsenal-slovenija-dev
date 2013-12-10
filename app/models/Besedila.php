<?php 

class Besedila extends \Eloquent 
{
	public $connection = 'sqlsrv';
	public $table = 'Besedila';
	public $primaryKey = 'BesediloID';
}