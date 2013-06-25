<?php
App::uses('AppController', 'Controller');
/**
 * Profesores Controller
 *
 * @property Profesor $Profesor
 */
class ProfesoresController extends AppController {

/**
 * escritorio method
 *
 * @param string $id
 * @return void
 */
	public function escritorio() {
		if($this->Session->read('Auth.User.rol_id') == self::PROFESOR) {
			$user_id = $this->Session->read('Auth.User.id');
			$id = $this->Profesor->field('id', array('user_id'=>$user_id));
			$this->Profesor->id = $id;
			
			# Se verifica la existencia del profesor
			if (!$this->Profesor->exists()) {
				throw new NotFoundException('Profesor inválido');
			}
			
			# Se verifica que el usuario actual corresponde con el usuario del profesor
			if(!($user_id == $this->Profesor->field('user_id'))) {
				throw new NotFoundException('Profesor inválido');
			}
			$this->Profesor->recursive =2;
			$this->set('profesor', $this->Profesor->read(null, $id));
		} else {
			// $this->logout();
			debug($this->Session->read('Auth.User'));
		}
	}


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Profesor->recursive = 0;
		$this->set('profesores', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Profesor->id = $id;
		if (!$this->Profesor->exists()) {
			throw new NotFoundException(__('Invalid profesor'));
		}
		$this->set('profesor', $this->Profesor->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Profesor->create();
			if ($this->Profesor->save($this->request->data)) {
				$this->Session->setFlash(__('The profesor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profesor could not be saved. Please, try again.'));
			}
		}
		$users = $this->Profesor->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Profesor->id = $id;
		if (!$this->Profesor->exists()) {
			throw new NotFoundException(__('Invalid profesor'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Profesor->save($this->request->data)) {
				$this->Session->setFlash(__('The profesor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profesor could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Profesor->read(null, $id);
		}
		$users = $this->Profesor->User->find('list');
		$this->set(compact('users'));
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
		$this->Profesor->id = $id;
		if (!$this->Profesor->exists()) {
			throw new NotFoundException(__('Invalid profesor'));
		}
		if ($this->Profesor->delete()) {
			$this->Session->setFlash(__('Profesor deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Profesor was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
