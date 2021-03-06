<div class="itineraries form">
<?= $this->Form->create($itinerary); ?>
	<fieldset>
		<legend><?= __('Edit Itinerary'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('event_id', ['options' => $events]);
		echo $this->Form->input('name');
        echo $this->Form->input('comments');
	?>
	</fieldset>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?= __('Actions'); ?></h3>
	<ul>
		<li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $itinerary->id], ['confirm' => __('Are you sure you want to delete # %s?', $itinerary->id)]); ?></li>
		<li><?= $this->Html->link(__('List Itineraries'), ['action' => 'index']); ?></li>
		<li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']); ?> </li>
		<li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']); ?> </li>
		<li><?= $this->Html->link(__('List Stages'), ['controller' => 'Stages', 'action' => 'index']); ?> </li>
		<li><?= $this->Html->link(__('New Stage'), ['controller' => 'Stages', 'action' => 'add']); ?> </li>
	</ul>
</div>
