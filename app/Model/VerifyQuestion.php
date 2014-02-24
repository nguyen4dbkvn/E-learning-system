<?php
App::uses('AppModel', 'Model');
/*
 * VerifyQuestion Model
 */
class VerifyQuestion extends AppModel{
	var $useTable = 'verifyquestions';
	public $primaryKey = 'verifycodeID';
	
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