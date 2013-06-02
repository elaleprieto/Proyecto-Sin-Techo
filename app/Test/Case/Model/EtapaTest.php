<?php
App::uses('Etapa', 'Model');

/**
 * Etapa Test Case
 *
 */
class EtapaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.etapa', 'app.clase', 'app.curso');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Etapa = ClassRegistry::init('Etapa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Etapa);

		parent::tearDown();
	}

}
