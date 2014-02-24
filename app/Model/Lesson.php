<?php
App::uses('AppModel', 'Model');
/*
 * Lesson Model
 */
class Lesson extends AppModel{
	var $useTable = 'lessons';
	public $primaryKey = 'lessonID';
	
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