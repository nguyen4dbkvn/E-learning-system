<?php
App::uses('AppModel', 'Model');
/*
 * ReportType Model
 */
class ReportType extends AppModel{
	var $useTable = 'reporttypes';
	public $primaryKey = 'reportTypeID';
	
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