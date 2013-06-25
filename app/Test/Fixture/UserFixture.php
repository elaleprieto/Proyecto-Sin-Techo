<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'password' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'role' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'rol_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'username' => 'aleprieto',
			'password' => '0209f12a24fe10e84e0f4a87f9fdff8a9a904d63',
			'role' => 'admin',
			'name' => 'Ale Prieto',
			'created' => '2013-05-04 14:24:18',
			'modified' => '2013-06-02 16:50:46',
			'rol_id' => '1'
		),
		array(
			'id' => '2',
			'username' => 'celeweidmann',
			'password' => '145e8ba60f22d14fa0f6ee6ff24a2a063032a6aa',
			'role' => 'admin',
			'name' => 'Cele Weidmann',
			'created' => '2013-05-11 18:21:28',
			'modified' => '2013-06-16 17:47:51',
			'rol_id' => '1'
		),
		array(
			'id' => '3',
			'username' => 'profesor',
			'password' => '0209f12a24fe10e84e0f4a87f9fdff8a9a904d63',
			'role' => 'admin',
			'name' => 'Profesor 1',
			'created' => '2013-05-11 18:21:46',
			'modified' => '2013-06-16 19:03:27',
			'rol_id' => '2'
		),
		array(
			'id' => '4',
			'username' => 'Juan Carlos',
			'password' => '0209f12a24fe10e84e0f4a87f9fdff8a9a904d63',
			'role' => 'admin',
			'name' => 'Juan Carlos Perez',
			'created' => '2013-05-11 18:22:22',
			'modified' => '2013-06-16 17:48:24',
			'rol_id' => '3'
		),
		array(
			'id' => '5',
			'username' => 'cele',
			'password' => '1c522f8626c21c5408fdc7cf7f0bcde61d595b61',
			'role' => '',
			'name' => 'cele',
			'created' => '2013-06-21 16:59:14',
			'modified' => '2013-06-21 16:59:14',
			'rol_id' => '2'
		),
	);
}
