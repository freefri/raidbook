<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EventFixture
 *
 */
class EventFixture extends TestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = [
		'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
		'title' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
		'date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
		'comments' => ['type' => 'string', 'length' => 400, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
		'_constraints' => [
			'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
		],
	];

/**
 * Records
 *
 * @var array
 */
	public $records = [
		[
			'id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'date' => '2014-08-09',
			'comments' => 'Lorem ipsum dolor sit amet'
		],
	];

}
