<div class="itineraries index">
	<h2><?= __('Itineraries'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?= $this->Paginator->sort('id'); ?></th>
		<th><?= $this->Paginator->sort('event_id'); ?></th>
		<th><?= $this->Paginator->sort('name'); ?></th>
		<th><?= $this->Paginator->sort('comments'); ?></th>
		<th class="actions"><?= __('Actions'); ?></th>
	</tr>
	<?php foreach ($itineraries as $itinerary): ?>
	<tr>
		<td><?= h($itinerary->id); ?>&nbsp;</td>
		<td>
			<?= $this->Html->link($itinerary->event->title, ['controller' => 'Events', 'action' => 'view', $itinerary->event->id]); ?>
		</td>
		<td><?= h($itinerary->name); ?>&nbsp;</td>
		<td><?= h($itinerary->comments); ?>&nbsp;</td>
		<td class="actions">
			<?= $this->Html->link(__('View'), ['action' => 'view', $itinerary->id]); ?>
			<?= $this->Html->link(__('Edit'), ['action' => 'edit', $itinerary->id]); ?>
			<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $itinerary->id], ['confirm' => __('Are you sure you want to delete # %s?', $itinerary->id)]); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	</table>
	<p><?= $this->Paginator->counter(); ?></p>
	<ul class="pagination">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'));
		echo $this->Paginator->numbers();
		echo $this->Paginator->next(__('next') . ' >');
	?>
	</ul>
</div>
<div class="actions">
	<h3><?= __('Actions'); ?></h3>
	<ul>
		<li><?= $this->Html->link(__('New Itinerary'), ['action' => 'add']); ?></li>
		<li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']); ?> </li>
		<li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']); ?> </li>
		<li><?= $this->Html->link(__('List Stages'), ['controller' => 'Stages', 'action' => 'index']); ?> </li>
		<li><?= $this->Html->link(__('New Stage'), ['controller' => 'Stages', 'action' => 'add']); ?> </li>
	</ul>
</div>
