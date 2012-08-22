<?php
App::uses('Subelement', 'Model');

/**
 * Subelement Test Case
 *
 */
class SubelementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subelement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Subelement = ClassRegistry::init('Subelement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Subelement);

		parent::tearDown();
	}

}
