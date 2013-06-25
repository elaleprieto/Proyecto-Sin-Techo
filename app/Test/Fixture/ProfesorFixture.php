<?php
/**
 * ProfesorFixture
 *
 */
class ProfesorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
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
			'created' => '2013-06-21 14:02:18',
			'modified' => '2013-06-21 14:02:18',
			'user_id' => '3'
		),
		array(
			'id' => '2',
			'created' => '2013-06-21 14:02:18',
			'modified' => '2013-06-21 14:02:18',
			'user_id' => '5'
		),
	);
}
