<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Section Entity.
 */
class Section extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'title' => true,
		'subtitle' => true,
		'lenght' => true,
		'slope_pos' => true,
		'slope_neg' => true,
		'open' => true,
		'close' => true,
		'best' => true,
		'comments' => true,
		'control' => true,
		'deleted' => true,
		'stages' => true,
	];

}
