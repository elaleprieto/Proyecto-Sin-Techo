<?php
App::uses('AppController', 'Controller');
/**
 * Categoriaetapas Controller
 *
 * @property Categoriaetapa $Categoriaetapa
 */
class CategoriaetapasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Categoriaetapa->recursive = 0;
		$this->set('categoriaetapas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Categoriaetapa->id = $id;
		if (!$this->Categoriaetapa->exists()) {
			throw new NotFoundException(__('Invalid categoriaetapa'));
		}
		$this->set('categoriaetapa', $this->Categoriaetapa->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Categoriaetapa->create();
			if ($this->Categoriaetapa->save($this->request->data)) {
				$this->Session->setFlash(__('The categoriaetapa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categoriaetapa could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Categoriaetapa->id = $id;
		if (!$this->Categoriaetapa->exists()) {
			throw new NotFoundException(__('Invalid categoriaetapa'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Categoriaetapa->save($this->request->data)) {
				$this->Session->setFlash(__('The categoriaetapa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categoriaetapa could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Categoriaetapa->read(null, $id);
		}
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
		$this->Categoriaetapa->id = $id;
		if (!$this->Categoriaetapa->exists()) {
			throw new NotFoundException(__('Invalid categoriaetapa'));
		}
		if ($this->Categoriaetapa->delete()) {
			$this->Session->setFlash(__('Categoriaetapa deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Categoriaetapa was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
