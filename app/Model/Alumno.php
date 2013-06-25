<?php
App::uses('AppModel', 'Model');
/**
 * Alumno Model
 *
 * @property User $User
 */
class Alumno extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'user_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	public $hasAndBelongsToMany = array(
        'Curso' =>
            array(
                'className'              => 'Curso',
                'joinTable'              => 'alumnos_cursos',
                'foreignKey'             => 'alumno_id',
                'associationForeignKey'  => 'curso_id',
                'unique'                 => true,
                'conditions'             => '',
                'fields'                 => '',
                'order'                  => '',
                'limit'                  => '',
                'offset'                 => '',
                'finderQuery'            => '',
                'deleteQuery'            => '',
                'insertQuery'            => ''
            )
    );
	
	public function getAlumnoId($user_id = null) {
		return $this->field('id', array('user_id'=>$user_id));
	}
}
