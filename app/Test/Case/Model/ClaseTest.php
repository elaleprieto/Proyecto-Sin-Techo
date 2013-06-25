<?php
App::uses('Clase', 'Model');

/**
 * Clase Test Case
 *
 */
class ClaseTestCase extends CakeTestCase {
	
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.alumnosCurso', 'app.clase', 'app.curso', 'app.etapa', 'app.profesor', 'app.user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Clase = ClassRegistry::init('Clase');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Clase);

		parent::tearDown();
	}

/**
 * testView method
 *
 * @return void
 */
	public function testClaseEsDictadaPorProfesor() {
		$clase_id = 1;
		$profesor_id = 3;
		
		$this->assertEquals(true, $this->Clase->dictadaPor($clase_id, $profesor_id));
	}
	
/**
 * testView method
 *
 * @return void
 */
	public function testClaseNoEsDictadaPorProfesor() {
		$clase_id = 1;
		$profesor_id = 2;
		
		$this->assertEquals(false, $this->Clase->dictadaPor($clase_id, $profesor_id));
	}
	
/**
 * testView method
 *
 * @return void
 */
	public function testClaseEsDictadaPorProfesorNull() {
		$clase_id = 1;
		$profesor_id = null;
		
		$this->assertEquals(false, $this->Clase->dictadaPor($clase_id, $profesor_id));
	}
	
/**
 * testView method
 *
 * @return void
 */
	public function testClaseNullEsDictadaPorProfesor() {
		$clase_id = null;
		$profesor_id = 2;
		
		$this->assertEquals(false, $this->Clase->dictadaPor($clase_id, $profesor_id));
	}
	
/**
 * testView method
 *
 * @return void
 */
	public function testClaseEsAsistidaPorAlumno() {
		$clase_id = 1;
		$alumno_id = 1;
		
		$this->assertEquals(true, $this->Clase->asistidaPor($clase_id, $alumno_id));
	}
	
/**
 * testView method
 *
 * @return void
 */
	public function testClaseNoEsAsistidaPorAlumno() {
		$clase_id = 1;
		$alumno_id = 2;
		
		$this->assertEquals(false, $this->Clase->asistidaPor($clase_id, $alumno_id));
	}
	
/**
 * testView method
 *
 * @return void
 */
	public function testClaseEsAsistidaPorAlumnoNull() {
		$clase_id = 1;
		$alumno_id = null;
		
		$this->assertEquals(false, $this->Clase->asistidaPor($clase_id, $alumno_id));
	}
	
/**
 * testView method
 *
 * @return void
 */
	public function testClaseNullEsAsistidaPorAlumno() {
		$clase_id = null;
		$alumno_id = 2;
		
		$this->assertEquals(false, $this->Clase->asistidaPor($clase_id, $alumno_id));
	}

}
