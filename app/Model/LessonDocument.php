<?php
App::uses('AppModel', 'Model');
/*
 * LessonReport Model
 */
class LessonRegistration extends AppModel{
	var $useTable = 'lesson_reports';
	public $primaryKey = 'reportID';
	
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