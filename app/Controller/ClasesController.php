<?php
App::uses('AppController', 'Controller');
/**
 * Clases Controller
 *
 * @property Clase $Clase
 */
class ClasesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Clase->recursive = 0;
		$this->set('clases', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Clase->id = $id;
		if (!$this->Clase->exists()) {
			throw new NotFoundException(__('Invalid clase'));
		}
		$this->set('clase', $this->Clase->read(null, $id));
	}
	
	
	#######################################################################################################################################
	#							ALUMNO
	#######################################################################################################################################
	
	/**
	 * alumno_ver method
	 *
	 * @param string $id
	 * @return void
	 */
	public function alumno_ver($id = null) {
		if(!$this->isAlumno()) {
			throw new BadRequestException('Alumno inválido');
		}
		$this->Clase->id = $id;
		if (!$this->Clase->exists()) {
			throw new NotFoundException('Clase inválida');
		}
		
		# Se verifica que el usuario logueado sea quien dicta la clase que se desea visualizar.
	    App::uses('Alumno', 'Model');
		$alumno = new Alumno();
		if(!$this->Clase->asistidaPor($id, $alumno->getAlumnoId(AuthComponent::user('id')))) {
			throw new NotFoundException('Clase inválida');
		}
		
		$this->set('clase', $this->Clase->read(null, $id));
	}
	
	#######################################################################################################################################
	#							PROFESOR
	#######################################################################################################################################
	
	
	/**
	 * profesor_ver method
	 *
	 * @param string $id
	 * @return void
	 */
	public function profesor_agregar($curso_id = null) {
		if(!$this->isProfesor()) {
			throw new BadRequestException('Profesor inválido');
		}
		if ($this->request->is('post')) {
			$this->Clase->create();
			if ($this->Clase->save($this->request->input('json_decode'))) {
				$this->autorender = false;
				return;
			} else {
				throw new BadRequestException('Ocurrió un problema y la clase no ha sido creada. Intente nuevamente.');
			}
		}
		$this->Clase->Curso->id = $curso_id;
		if (!$this->Clase->Curso->exists()) {
			throw new NotFoundException('Curso inválido');
		}
		$this->set('curso', $this->Clase->Curso->read(null, $curso_id));
	}
	
	/**
	 * profesor_ver method
	 *
	 * @param string $id
	 * @return void
	 */
	public function profesor_ver($id = null) {
		if(!$this->isProfesor()) {
			throw new BadRequestException(__('Invalid profesor'));
		}
		$this->Clase->id = $id;
		if (!$this->Clase->exists()) {
			throw new NotFoundException('Clase inválida');
		}
		
		# Se verifica que el usuario logueado sea quien dicta la clase que se desea visualizar.
	    App::uses('Profesor', 'Model');
		$profesor = new Profesor();
		if(!$this->Clase->dictadaPor($id, $profesor->getProfesorId(AuthComponent::user('id')))) {
			throw new NotFoundException(__('Invalid clase'));
		}
		
		$this->set('clase', $this->Clase->read(null, $id));
	}
	
/**
 * ver method
 *
 * @param string $id
 * @return void
 */
	public function ver($id = null) {
		$this->layout = 'alumno';
		$this->Clase->id = $id;
		if (!$this->Clase->exists()) {
			throw new NotFoundException(__('Invalid clase'));
		}
		$this->set('clase', $this->Clase->read(null, $id));
	}
	
/**
 * ver method
 *
 * @param string $id
 * @return void
 */
	public function in($id = null) {
		$this->layout = 'alumno';
		$this->Clase->id = $id;
		if (!$this->Clase->exists()) {
			throw new NotFoundException(__('Invalid clase'));
		}
		
		$condiciones = array('Etapa.clase_id' => $id);
		$etapa = $this->Clase->Etapa->find('first', array('conditions'=>$condiciones, 'order'=>'order ASC'));
		
		$this->redirect(array('controller'=>'etapas', 'action'=>'ver', $etapa['Etapa']['id']));
		
		// $this->set('clase', $this->Clase->read(null, $id));
	}
	

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Clase->create();
			if ($this->Clase->save($this->request->data)) {
				$this->Session->setFlash(__('The clase has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clase could not be saved. Please, try again.'));
			}
		}
		$cursos = $this->Clase->Curso->find('list');
		$this->set(compact('cursos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Clase->id = $id;
		if (!$this->Clase->exists()) {
			throw new NotFoundException(__('Invalid clase'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Clase->save($this->request->data)) {
				$this->Session->setFlash(__('The clase has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clase could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Clase->read(null, $id);
		}
		$cursos = $this->Clase->Curso->find('list');
		$this->set(compact('cursos'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Clase->id = $id;
		if (!$this->Clase->exists()) {
			throw new NotFoundException(__('Invalid clase'));
		}
		if ($this->Clase->delete()) {
			$this->Session->setFlash(__('Clase deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Clase was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
