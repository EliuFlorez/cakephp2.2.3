<?php

App::uses('AppModel','Model');

class Student extends AppModel{

	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'counterCache'=>true
		),
		'Division' => array(
			'className' => 'Division',
			'foreignKey' => 'division_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'counterCache'=>true
		),
		'Standard' => array(
			'className' => 'Standard',
			'foreignKey' => 'standard_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'counterCache'=>true
		)
	);	
}

?>