<?php
App::uses('AppController', 'Controller');
/**
 * Alumnos Controller
 *
 * @property Alumno $Alumno
 */
class AlumnosController extends AppController {

/**
 * escritorio method
 *
 * @param string $id
 * @return void
 */
	public function escritorio() {
		if($this->Session->read('Auth.User.rol_id') == self::ALUMNO) {
			$user_id = $this->Session->read('Auth.User.id');
			$id = $this->Alumno->field('id', array('user_id'=>$user_id));
			$this->Alumno->id = $id;
			
			# Se verifica la existencia del profesor
			if (!$this->Alumno->exists()) {
				throw new NotFoundException('Alumno inválido');
			}
			
			# Se verifica que el usuario actual corresponde con el usuario del alumno
			if(!($user_id == $this->Alumno->field('user_id'))) {
				throw new NotFoundException('Alumno inválido');
			}
			$this->Alumno->recursive = 1;
			$this->set('alumno', $this->Alumno->read(null, $id));
		} else {
			$this->redirect(array('controller'=>'users', 'action'=>'login'));
		}
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Alumno->recursive = 0;
		$this->set('alumnos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Alumno->id = $id;
		if (!$this->Alumno->exists()) {
			throw new NotFoundException(__('Invalid alumno'));
		}
		$this->set('alumno', $this->Alumno->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Alumno->create();
			if ($this->Alumno->save($this->request->data)) {
				$this->Session->setFlash(__('The alumno has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alumno could not be saved. Please, try again.'));
			}
		}
		$users = $this->Alumno->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Alumno->id = $id;
		if (!$this->Alumno->exists()) {
			throw new NotFoundException(__('Invalid alumno'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Alumno->save($this->request->data)) {
				$this->Session->setFlash(__('The alumno has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alumno could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Alumno->read(null, $id);
		}
		$users = $this->Alumno->User->find('list');
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
		$this->Alumno->id = $id;
		if (!$this->Alumno->exists()) {
			throw new NotFoundException(__('Invalid alumno'));
		}
		if ($this->Alumno->delete()) {
			$this->Session->setFlash(__('Alumno deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Alumno was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
