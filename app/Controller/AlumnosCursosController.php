<?php
App::uses('AppController', 'Controller');
/**
 * AlumnosCursos Controller
 *
 * @property AlumnosCurso $AlumnosCurso
 */
class AlumnosCursosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AlumnosCurso->recursive = 0;
		$this->set('alumnosCursos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->AlumnosCurso->id = $id;
		if (!$this->AlumnosCurso->exists()) {
			throw new NotFoundException(__('Invalid alumnos curso'));
		}
		$this->set('alumnosCurso', $this->AlumnosCurso->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AlumnosCurso->create();
			if ($this->AlumnosCurso->save($this->request->data)) {
				$this->Session->setFlash(__('The alumnos curso has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alumnos curso could not be saved. Please, try again.'));
			}
		}
		$alumnos = $this->AlumnosCurso->Alumno->find('list');
		$cursos = $this->AlumnosCurso->Curso->find('list');
		$this->set(compact('alumnos', 'cursos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->AlumnosCurso->id = $id;
		if (!$this->AlumnosCurso->exists()) {
			throw new NotFoundException(__('Invalid alumnos curso'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AlumnosCurso->save($this->request->data)) {
				$this->Session->setFlash(__('The alumnos curso has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alumnos curso could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->AlumnosCurso->read(null, $id);
		}
		$alumnos = $this->AlumnosCurso->Alumno->find('list');
		$cursos = $this->AlumnosCurso->Curso->find('list');
		$this->set(compact('alumnos', 'cursos'));
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
		$this->AlumnosCurso->id = $id;
		if (!$this->AlumnosCurso->exists()) {
			throw new NotFoundException(__('Invalid alumnos curso'));
		}
		if ($this->AlumnosCurso->delete()) {
			$this->Session->setFlash(__('Alumnos curso deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Alumnos curso was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
