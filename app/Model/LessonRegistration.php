<?php
App::uses('AppModel', 'Model');
/*
 * LessonRegistration Model
 */
class LessonRegistration extends AppModel{
	var $useTable = 'lesson_registrations';
	public $primaryKey = 'registrationID';
	
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