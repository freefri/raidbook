<div class="events index">
	<h2><?= __('Events'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?= $this->Paginator->sort('id'); ?></th>
		<th><?= $this->Paginator->sort('title'); ?></th>
		<th><?= $this->Paginator->sort('date'); ?></th>
		<th><?= $this->Paginator->sort('comments'); ?></th>
		<th class="actions"><?= __('Actions'); ?></th>
	</tr>
	<?php foreach ($events as $event): ?>
	<tr>
		<td><?= h($event->id); ?>&nbsp;</td>
		<td><?= h($event->title); ?>&nbsp;</td>
		<td><?= h($event->date); ?>&nbsp;</td>
		<td><?= h($event->comments); ?>&nbsp;</td>
		<td class="actions">
			<?= $this->Html->link(__('View'), ['action' => 'view', $event->id]); ?>
			<?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->id]); ?>
			<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # %s?', $event->id)]); ?>
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
		<li><?= $this->Html->link(__('New Event'), ['action' => 'add']); ?></li>
        <li><?= $this->Html->link(__('List Itineraries'), ['controller' => 'Itineraries', 'action' => 'index']); ?> </li>
		<li><?= $this->Html->link(__('New Itinerary'), ['controller' => 'Itineraries', 'action' => 'add']); ?> </li>
        <li><?= $this->Html->link(__('List Sections'), ['controller' => 'Sections', 'action' => 'index']); ?> </li>
        <li><?= $this->Html->link(__('New Section'), ['controller' => 'Sections', 'action' => 'add']); ?> </li>
	</ul>
</div>
