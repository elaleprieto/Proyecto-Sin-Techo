<?php
App::uses('AppController', 'Controller');
/**
 * Etapas Controller
 *
 * @property Etapa $Etapa
 */
class EtapasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Etapa->recursive = 0;
		$this->set('etapas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Etapa->id = $id;
		if (!$this->Etapa->exists()) {
			throw new NotFoundException(__('Invalid etapa'));
		}
		$this->set('etapa', $this->Etapa->read(null, $id));
	}
	
	
	#######################################################################################################################################
	#							PUBLIC
	#######################################################################################################################################
	public function set_order() {
		# Se setea el layout y la vista.
		# AutoRender = false, evita tener que crear una Vista que no se va a usar.
		$this->layout = 'ajax';
		$this->autoRender = FALSE;
		
		if ($this->request->isPost()) {
			$data = $this->request->input('json_decode');
			
			if(isset($data->id) && isset($data->order)) { 
				$this->Etapa->id = $data->id;
				$this->Etapa->saveField('order', $data->order);
				return $this->Etapa->field('order');
			}
		} 
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
		$this->Etapa->id = $id;
		if (!$this->Etapa->exists()) {
			throw new NotFoundException('Etapa inválida');
		}
		
		$claseId = $this->Etapa->field('clase_id');
		$etapaOrder = $this->Etapa->field('order');
		$neighbors = $this->Etapa->find('neighbors', array('conditions' => array('Etapa.clase_id' => $claseId)
			, 'field' => 'order'
			, 'value' => $etapaOrder
		));
		$pasos = $this->Etapa->find('all', array('conditions'=>array('clase_id'=>$claseId)
			, 'fields'=>array('id', 'order')
			, 'order'=>'order ASC'));

		$this->set('etapa', $this->Etapa->read(null, $id));
		$this->set(compact('pasos', 'neighbors'));
	}
	
	// $this->layout = 'alumno';
	// $this->Etapa->id = $id;
	// $this->Etapa->recursive = -1;
	// if (!$this->Etapa->exists()) {
		// throw new NotFoundException(__('Invalid etapa'));
	// }
	// $claseId = $this->Etapa->field('clase_id');
	// $neighbors = $this->Etapa->find('neighbors', array(
	    // 'conditions' => array('Etapa.clase_id' => $claseId),
	    // 'fields' => array('id'),
	// ));
	// $pasos = $this->Etapa->find('all', array(
		// 'conditions'=>array('clase_id'=>$claseId),
		// 'fields'=>array('id', 'order'),
		// 'order'=>'order ASC'));
	// $this->set('etapa', $this->Etapa->read(null, $id));
	// $this->set(compact('pasos', 'neighbors'));
	
	#######################################################################################################################################
	#							PROFESOR
	#######################################################################################################################################
	
	/**
	 * profesor_ver method
	 *
	 * @param string $id
	 * @return void
	 */
	public function profesor_agregar($clase_id = null) {
		if(!$this->isProfesor()) {
			throw new BadRequestException('Profesor inválido');
		}
		if ($this->request->is('post')) {
			$this->Etapa->create();
			if ($this->Etapa->save($this->request->input('json_decode'))) {
				$this->autorender = false;
				return;
			} else {
				throw new BadRequestException('Ocurrió un problema y la etapa no ha sido creada. Intente nuevamente.');
			}
		}
		$this->Etapa->Clase->id = $clase_id;
		if (!$this->Etapa->Clase->exists()) {
			throw new NotFoundException('Clase inválida');
		}
		$this->set('clase', $this->Etapa->Clase->read(null, $clase_id));
	}
	

/**
 * profesor_ver method
 *
 * @param string $id
 * @return void
 */
	public function profesor_ver($id = null) {
		if(!$this->isProfesor()) {
			throw new BadRequestException('Profesor inválido');
		}
		$this->Etapa->id = $id;
		if (!$this->Etapa->exists()) {
			throw new NotFoundException('Etapa inválida');
		}
		$this->set('etapa', $this->Etapa->read(null, $id));
	}
	
	#######################################################################################################################################
	#							OLD
	#######################################################################################################################################
	
// /**
 // * ver method
 // *
 // * @param string $id
 // * @return void
 // */
	// public function ver($id = null) {
		// $this->layout = 'alumno';
		// $this->Etapa->id = $id;
		// $this->Etapa->recursive = -1;
		// if (!$this->Etapa->exists()) {
			// throw new NotFoundException(__('Invalid etapa'));
		// }
		// $claseId = $this->Etapa->field('clase_id');
		// $neighbors = $this->Etapa->find('neighbors', array(
		    // 'conditions' => array('Etapa.clase_id' => $claseId),
		    // 'fields' => array('id'),
		// ));
		// $pasos = $this->Etapa->find('all', array(
			// 'conditions'=>array('clase_id'=>$claseId),
			// 'fields'=>array('id', 'order'),
			// 'order'=>'order ASC'));
		// $this->set('etapa', $this->Etapa->read(null, $id));
		// $this->set(compact('pasos', 'neighbors'));
	// }

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$etapa = $this->request->data;
			$orden = $this->Etapa->find('first', array('conditions' => array('clase_id'=>$etapa['Etapa']['clase_id']), 'order'=>'Etapa.order DESC'));
			$etapa['Etapa']['order'] = $orden['Etapa']['order'] + 1;
			
			$this->Etapa->create();
			if ($this->Etapa->save($this->request->data)) {
				$this->Session->setFlash(__('The etapa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The etapa could not be saved. Please, try again.'));
			}
		}
		$categoriaetapas = $this->Etapa->Categoriaetapa->find('list');
		$clases = $this->Etapa->Clase->find('list');
		$this->set(compact('categoriaetapas', 'clases'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Etapa->id = $id;
		if (!$this->Etapa->exists()) {
			throw new NotFoundException(__('Invalid etapa'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Etapa->save($this->request->data)) {
				$this->Session->setFlash(__('The etapa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The etapa could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Etapa->read(null, $id);
		}
		$categoriaetapas = $this->Etapa->Categoriaetapa->find('list');
		$clases = $this->Etapa->Clase->find('list');
		$this->set(compact('categoriaetapas', 'clases'));
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
		$this->Etapa->id = $id;
		if (!$this->Etapa->exists()) {
			throw new NotFoundException(__('Invalid etapa'));
		}
		if ($this->Etapa->delete()) {
			$this->Session->setFlash(__('Etapa deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Etapa was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
