<?php
App::uses('AppModel', 'Model');
/*
 * LessonComment Model
 */
class LessonComment extends AppModel{
	var $useTable = 'lesson_comments';
	public $primaryKey = 'commentID';
	
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