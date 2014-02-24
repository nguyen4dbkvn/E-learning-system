<?php
App::uses('AppModel', 'Model');
/*
 * User Model
 */
class User extends AppModel{
	var $useTable = 'users';
	public $primaryKey = 'userID';
	
	//Foreign key relationships
	public $belongsTo = array(
		
	);
	public $hasMany = array(
		
	);
	
	public $validate = array(
	);
	
	
	//public function abcdef
	//
}