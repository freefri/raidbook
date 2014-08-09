<?php
namespace App\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use App\Model\Table\SectionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SectionsTable Test Case
 */
class SectionsTableTest extends TestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = [
		'app.section',
		'app.stage'
	];

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$config = TableRegistry::exists('Sections') ? [] : ['className' => 'App\Model\Table\SectionsTable'];
		$this->Sections = TableRegistry::get('Sections', $config);
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sections);

		parent::tearDown();
	}

}
