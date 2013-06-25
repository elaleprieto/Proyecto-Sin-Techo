<?php
App::uses('Profesor', 'Model');

/**
 * Profesor Test Case
 *
 */
class ProfesorTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.profesor', 'app.user', 'app.rol', 'app.curso', 'app.cursos_user', 'app.clase', 'app.etapa', 'app.categoriaetapa');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Profesor = ClassRegistry::init('Profesor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Profesor);

		parent::tearDown();
	}

/**
 * testView method
 *
 * @return void
 */
	public function testUserIdTresEntoncesProfesorIdUno() {
		$user_id = 3;
		
		$this->assertEquals('1', $this->Profesor->getProfesorId($user_id));
	}
	
/**
 * testView method
 *
 * @return void
 */
	public function testUserIdCincoEntoncesProfesorIdDos() {
		$user_id = 5;
		
		$this->assertEquals('2', $this->Profesor->getProfesorId($user_id));
	}
	
/**
 * testView method
 *
 * @return void
 */
	public function testUserIdNullEntoncesProfesorIdNull() {
		$user_id = null;
		
		$this->assertEquals(null, $this->Profesor->getProfesorId($user_id));
	}

}
