<?php
App::uses('AppModel', 'Model');
/**
 * Genre Model
 *
 * @property Film $Film
 */
class Genre extends AppModel
{

	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'name';

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
		'id' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

	/**
	 * hasMany associations
	 *
	 * @var array
	 */
	public $hasMany = array(
		'Film' => array(
			'className' => 'Film',
			'foreignKey' => 'genre_id',
			'joinTable' => 'films',
			'associationForeignKey' => 'genre_id',
			'dependent' => true
		)
	);

}