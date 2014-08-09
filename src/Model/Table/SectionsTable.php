<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sections Model
 */
class SectionsTable extends Table {

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
	public function initialize(array $config) {
		$this->table('sections');
		$this->displayField('title');
		$this->primaryKey('id');

		$this->hasMany('Stages', [
			'foreignKey' => 'section_id',
		]);
	}

/**
 * Default validation rules.
 *
 * @param \Cake\Validation\Validator $validator
 * @return \Cake\Validation\Validator
 */
	public function validationDefault(Validator $validator) {
		$validator
			->add('id', 'valid', ['rule' => 'numeric'])
			->allowEmpty('id', 'create')
			->validatePresence('title', 'create')
			->notEmpty('title')
			->validatePresence('subtitle', 'create')
			->notEmpty('subtitle')
			->add('lenght', 'valid', ['rule' => 'decimal'])
			->validatePresence('lenght', 'create')
			->notEmpty('lenght')
			->add('slope_pos', 'valid', ['rule' => 'numeric'])
			->validatePresence('slope_pos', 'create')
			->notEmpty('slope_pos')
			->add('slope_neg', 'valid', ['rule' => 'numeric'])
			->validatePresence('slope_neg', 'create')
			->notEmpty('slope_neg')
			->add('open', 'valid', ['rule' => 'time'])
			->validatePresence('open', 'create')
			->notEmpty('open')
			->add('close', 'valid', ['rule' => 'time'])
			->validatePresence('close', 'create')
			->notEmpty('close')
			->add('best', 'valid', ['rule' => 'time'])
			->validatePresence('best', 'create')
			->notEmpty('best')
			->validatePresence('comments', 'create')
			->notEmpty('comments')
			->add('control', 'valid', ['rule' => 'boolean'])
			->validatePresence('control', 'create')
			->notEmpty('control')
			->add('deleted', 'valid', ['rule' => 'datetime'])
			->validatePresence('deleted', 'create')
			->notEmpty('deleted');

		return $validator;
	}

}
