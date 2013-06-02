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
	
/**
 * ver method
 *
 * @param string $id
 * @return void
 */
	public function ver($id = null) {
		$this->layout = 'alumno';
		$this->Etapa->id = $id;
		$this->Etapa->recursive = -1;
		if (!$this->Etapa->exists()) {
			throw new NotFoundException(__('Invalid etapa'));
		}
		$claseId = $this->Etapa->field('clase_id');
		$neighbors = $this->Etapa->find('neighbors', array(
		    'conditions' => array('Etapa.clase_id' => $claseId),
		    'fields' => array('id'),
		));
		$pasos = $this->Etapa->find('all', array(
			'conditions'=>array('clase_id'=>$claseId),
			'fields'=>array('id', 'order'),
			'order'=>'order ASC'));
		$this->set('etapa', $this->Etapa->read(null, $id));
		$this->set(compact('pasos', 'neighbors'));
	}

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
