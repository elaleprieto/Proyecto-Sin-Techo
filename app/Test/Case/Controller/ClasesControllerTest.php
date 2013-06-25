<?php
App::uses('ClasesController', 'Controller');
App::uses('Clase', 'Model');
App::uses('Profesor', 'Model');

/**
 * TestClasesController *
 */
class TestClasesController extends ClasesController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * ClasesController Test Case
 *
 */
class ClasesControllerTestCase extends ControllerTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.clase', 'app.curso', 'app.etapa', 'app.profesor', 'app.rol', 'app.user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Clases = new TestClasesController();
		$this->Clases->constructClasses();
		
		$this->Clase = ClassRegistry::init('Clase');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Clases);

		parent::tearDown();
	}
	
/**
 * testIndex method
 *
 * @return void
 */
	public function testProfesorVerCuandoUsuarioNoEsProfesor() {
		$this->setExpectedException('BadRequestException');
		$result = $this->testAction('/profesor/clases/ver');
	}
	
	public function testProfesorVerCuandoClaseNull() {
		$this->setExpectedException('NotFoundException', 'Clase inválida', 404);
		
		$Clases = $this->generate('Clases', array(
	        'components' => array(
	            'Session',
	        )
	    ));
	    $Clases->Session
	        ->expects($this->once())
	        ->method('read')
			->with('Auth.User.rol_id')
			->will($this->returnValue(2));

		$result = $this->testAction('/profesor/clases/ver');
	}

	// public function testProfesorVerCuandoDictadoPorEsTrue() {
		// // App::uses('Profesor', 'Model');
		// // App::uses('Profesores', 'Controller');
		// // $profesor = new Profesor();
// 		
// 			
		// // $Clases->Profesor = $this->getMock('Profesor', array('getProfesorId'));
		// $Clases = $this->generate('Clases', array(
			// 'components' => array(
		            // 'Session',
		        // ),
			// 'models' => array(
		        // // 'Profesor' => array('getProfesorId'),
		        // 'Clase' => array('dictadaPorProfesor')
		    // )
	    // ));
		// $Profesores = $this->generate('Profesores', array(
			// 'models' => array(
		        // 'Profesor' => array('getProfesorId'),
		    // )
	    // ));
		// debug($Profesores);
// 		
		// $Clases->Session
	        // ->expects($this->once())
	        // ->method('read')
			// ->with('Auth.User.rol_id')
			// ->will($this->returnValue(2));
// 		
	    // $Clases->Clase
	        // ->expects($this->once())
	        // ->method('dictadaPorProfesor')
			// ->with('1', '3')
			// ->will($this->returnValue(true));
// 			
	    // // $Clases->Profesor
	        // // ->expects($this->any())
	        // // ->method('getProfesorId')
			// // ->with(3)
			// // ->will($this->returnValue('3'));
// 			
// 			
	    // // $Profesores->Profesor
	        // // // ->expects($this->once())
	        // // ->method('getProfesorId');
			// // ->with('AuthComponent::user('id')')
			// // ->will($this->returnValue('3'));
// 
		// $result = $this->testAction('/profesor/clases/ver/1');
	// }
	
/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}
/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}
/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}
/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}
/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}
}
