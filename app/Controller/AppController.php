<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	const ADMIN = 1;
	const PROFESOR = 2;
	const ALUMNO = 3;

	public $components = array(
		'Session',
		'Auth' => array(
			'loginAction' => array(
				'admin'=> false,
				'controller' => 'users', 
				'action' => 'login'
			),
			'logoutRedirect' => array(
				'admin'=> false,
				'controller' => 'users',
				'action' => 'login'
			),
			'authorize' => array('Controller'),
		)
	);

	public function beforeFilter() {
		switch (AuthComponent::user('rol_id')) {
			case self::ADMIN:
	            $this -> layout = 'administrador';
				break;
			case self::PROFESOR:
	            $this -> layout = 'profesor';
				break;
			default:
		        $this->layout = 'alumno';
				break;
		}
	}

	public function isAuthorized($user) {
		// Admin can access every action
		if (isset($user['role']) && $user['role'] === 'admin') {
			return true;
		}

		// Default deny
		return false;
	}

	public function isAlumno() {
		if($this->Session->read('Auth.User.rol_id') == self::ALUMNO) {
			return true;
		}
		return false;
	}

	public function isProfesor() {
		if($this->Session->read('Auth.User.rol_id') == self::PROFESOR) {
			return true;
		}
		return false;
	}

}
