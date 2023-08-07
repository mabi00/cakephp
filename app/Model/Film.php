<?php
App::uses('AppModel', 'Model');
/**
 * Film Model
 *
 * @property Genre $Genre
 */
class Film extends AppModel
{


	//

	//

	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'title';

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
		'photo' => array(
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'there was an error when saving the image.',
				'allowEmpty' => true,
			),
			'mimeType' => array(
				'rule' => array('mimeType', array('image/jpeg', 'image/png', 'image/gif')),
				'message' => 'only JPEG, PNG e GIF allowed.',
				'allowEmpty' => true,
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

	/**
	 * belongsTo associations
	 *
	 * @var array
	 */
	public $belongsTo = array(
		'Genre' => array(
			'className' => 'Genre',
			'foreignKey' => 'genre_id',
		)
	);
}