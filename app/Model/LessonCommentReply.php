<?php
App::uses('AppModel', 'Model');
/*
 * LessonCommentReply Model
 */
class LessonCommentReply extends AppModel{
	var $useTable = 'lesson_comment_replies';
	public $primaryKey = 'replyID';
	
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