<?php
App::uses('AppModel', 'Model');
/*
 * LessonCategory Model
 */
class LessonCategory extends AppModel{
	var $useTable = 'categories';
	public $primaryKey = 'categoryID';
	
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