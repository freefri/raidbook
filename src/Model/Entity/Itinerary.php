<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Itinerary Entity.
 */
class Itinerary extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'event_id' => true,
		'name' => true,
		'comments' => true,
		'event' => true,
		'stages' => true,
	];

}
