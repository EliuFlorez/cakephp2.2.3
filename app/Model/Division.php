<?php
App::uses('AppModel', 'Model');
/**
 * Standard Model
 *
 * @property School $School
 * @property Division $Division
 */
class Division extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */

    public $displayField = 'division_name';
    
	public $validate = array(
		'school_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'standard_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'division_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Standard' => array(
			'className' => 'Standard',
			'foreignKey' => 'standard_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'counterCache'=>true
		)
		
	);
	
	public $hasMany = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'division_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	
	
}
