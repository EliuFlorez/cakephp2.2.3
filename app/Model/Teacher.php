<?php

App::uses('AppModel','Model');

class Teacher extends AppModel{
	
	public $validate = array(
		'qualification' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter qualification details',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		
		'specialization' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your specialization ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);	
		
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'counterCache'=>true
		)
	);	
}

?>