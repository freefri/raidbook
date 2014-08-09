<div class="sections form">
<?= $this->Form->create($section); ?>
	<fieldset>
		<legend><?= __('Add Section'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('subtitle');
		echo $this->Form->input('lenght');
		echo $this->Form->input('slope_pos');
		echo $this->Form->input('slope_neg');
		echo $this->Form->input('open');
		echo $this->Form->input('close');
		echo $this->Form->input('best');
		echo $this->Form->input('comments');
		echo $this->Form->input('control');
		echo $this->Form->input('deleted');
	?>
	</fieldset>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?= __('Actions'); ?></h3>
	<ul>
		<li><?= $this->Html->link(__('List Sections'), ['action' => 'index']); ?></li>
		<li><?= $this->Html->link(__('List Stages'), ['controller' => 'Stages', 'action' => 'index']); ?> </li>
		<li><?= $this->Html->link(__('New Stage'), ['controller' => 'Stages', 'action' => 'add']); ?> </li>
	</ul>
</div>
