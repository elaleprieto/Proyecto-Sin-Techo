<?php
App::uses('Categoriaetapa', 'Model');

/**
 * Categoriaetapa Test Case
 *
 */
class CategoriaetapaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.categoriaetapa');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Categoriaetapa = ClassRegistry::init('Categoriaetapa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Categoriaetapa);

		parent::tearDown();
	}

}
