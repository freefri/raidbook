<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Itineraries Model
 */
class ItinerariesTable extends Table {

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
	public function initialize(array $config) {
		$this->table('itineraries');
		$this->displayField('name');
		$this->primaryKey('id');

		$this->belongsTo('Events', [
			'foreignKey' => 'event_id',
		]);
		$this->hasMany('Stages', [
			'foreignKey' => 'itinerary_id',
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
			->add('event_id', 'valid', ['rule' => 'numeric'])
			->validatePresence('event_id', 'create')
			->notEmpty('event_id')
			->validatePresence('name', 'create')
			->notEmpty('name')
			->validatePresence('comments', 'create')
			->notEmpty('comments');

		return $validator;
	}

}
