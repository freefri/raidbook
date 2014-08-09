<?php
namespace App\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use App\Model\Table\ItinerariesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ItinerariesTable Test Case
 */
class ItinerariesTableTest extends TestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$config = TableRegistry::exists('Itineraries') ? [] : ['className' => 'App\Model\Table\ItinerariesTable'];
		$this->Itineraries = TableRegistry::get('Itineraries', $config);
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Itineraries);

		parent::tearDown();
	}

}
