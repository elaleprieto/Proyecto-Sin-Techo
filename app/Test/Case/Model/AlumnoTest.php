<?php
App::uses('Alumno', 'Model');

/**
 * Alumno Test Case
 *
 */
class AlumnoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.alumno', 'app.user', 'app.rol', 'app.curso', 'app.cursos_user', 'app.clase', 'app.etapa', 'app.categoriaetapa');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Alumno = ClassRegistry::init('Alumno');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Alumno);

		parent::tearDown();
	}

/**
 * testView method
 *
 * @return void
 */
	public function testUserIdCuatroEntoncesAlumnoIdUno() {
		$user_id = 4;
		
		$this->assertEquals('1', $this->Alumno->getAlumnoId($user_id));
	}
	
/**
 * testView method
 *
 * @return void
 */
	public function testUserIdSeisEntoncesAlumnoIdDos() {
		$user_id = 6;
		
		$this->assertEquals('2', $this->Alumno->getAlumnoId($user_id));
	}
	
/**
 * testView method
 *
 * @return void
 */
	public function testUserIdNullEntoncesAlumnoIdNull() {
		$user_id = null;
		
		$this->assertEquals(null, $this->Alumno->getAlumnoId($user_id));
	}

}
