<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SectionFixture
 *
 */
class SectionFixture extends TestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = [
		'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
		'title' => ['type' => 'string', 'length' => 200, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
		'subtitle' => ['type' => 'string', 'length' => 250, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
		'lenght' => ['type' => 'decimal', 'length' => 7, 'precision' => 3, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
		'slope_pos' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
		'slope_neg' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
		'open' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
		'close' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
		'best' => ['type' => 'time', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
		'comments' => ['type' => 'string', 'length' => 400, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
		'control' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
		'deleted' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
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
			'subtitle' => 'Lorem ipsum dolor sit amet',
			'lenght' => '',
			'slope_pos' => 1,
			'slope_neg' => 1,
			'open' => '11:59:05',
			'close' => '11:59:05',
			'best' => '11:59:05',
			'comments' => 'Lorem ipsum dolor sit amet',
			'control' => 1,
			'deleted' => '2014-08-09 11:59:05'
		],
	];

}
