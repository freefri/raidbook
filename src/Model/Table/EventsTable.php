<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Events Model
 */
class EventsTable extends Table {

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
	public function initialize(array $config) {
		$this->table('events');
		$this->displayField('title');
		$this->primaryKey('id');

		$this->hasMany('Itineraries', [
			'foreignKey' => 'event_id',
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
			->add('date', 'valid', ['rule' => 'date'])
			->validatePresence('date', 'create')
			->notEmpty('date')
			->validatePresence('comments', 'create')
			->notEmpty('comments');

		return $validator;
	}

}
