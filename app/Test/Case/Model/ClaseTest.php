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
	public $fixtures = array('app.clase', 'app.curso', 'app.etapa');

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

}
