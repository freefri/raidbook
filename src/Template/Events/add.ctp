<div class="events form">
<?= $this->Form->create($event); ?>
	<fieldset>
		<legend><?= __('Add Event'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('date');
		echo $this->Form->input('comments');
	?>
	</fieldset>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?= __('Actions'); ?></h3>
	<ul>
		<li><?= $this->Html->link(__('List Events'), ['action' => 'index']); ?></li>
		<li><?= $this->Html->link(__('List Itineraries'), ['controller' => 'Itineraries', 'action' => 'index']); ?> </li>
		<li><?= $this->Html->link(__('New Itinerary'), ['controller' => 'Itineraries', 'action' => 'add']); ?> </li>
	</ul>
</div>
