<?php
App::uses('AppModel', 'Model');
/**
 * Clase Model
 *
 * @property Curso $Curso
 * @property Etapa $Etapa
 */
class Clase extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'curso_id' => array(
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
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'curso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Etapa' => array(
			'className' => 'Etapa',
			'foreignKey' => 'clase_id',
			'dependent' => false,
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

	
	public function dictadaPor($clase_id = null, $profesor_id = null) {
		$cursoId = $this->field('curso_id', array('id'=>$clase_id));
		$cursoProfesorId = $this->Curso->field('profesor_id', array('id'=>$cursoId));
		
		return $profesor_id == $cursoProfesorId;
	}

	public function asistidaPor($clase_id = null, $alumno_id = null) {
		$cursoId = $this->field('curso_id', array('id'=>$clase_id));
		$cursoAlumnoId = $this->Curso->AlumnosCurso->field('alumno_id', array('id'=>$cursoId));
		
		return $alumno_id == $cursoAlumnoId;
	}


}
