<div class="sections index">
	<h2><?= __('Sections'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?= $this->Paginator->sort('id'); ?></th>
		<th><?= $this->Paginator->sort('title'); ?></th>
		<th><?= $this->Paginator->sort('subtitle'); ?></th>
		<th><?= $this->Paginator->sort('lenght'); ?></th>
		<th><?= $this->Paginator->sort('slope_pos'); ?></th>
		<th><?= $this->Paginator->sort('slope_neg'); ?></th>
		<th><?= $this->Paginator->sort('open'); ?></th>
		<th><?= $this->Paginator->sort('close'); ?></th>
		<th><?= $this->Paginator->sort('best'); ?></th>
		<th><?= $this->Paginator->sort('comments'); ?></th>
		<th><?= $this->Paginator->sort('control'); ?></th>
		<th><?= $this->Paginator->sort('deleted'); ?></th>
		<th class="actions"><?= __('Actions'); ?></th>
	</tr>
	<?php foreach ($sections as $section): ?>
	<tr>
		<td><?= h($section->id); ?>&nbsp;</td>
		<td><?= h($section->title); ?>&nbsp;</td>
		<td><?= h($section->subtitle); ?>&nbsp;</td>
		<td><?= h($section->lenght); ?>&nbsp;</td>
		<td><?= h($section->slope_pos); ?>&nbsp;</td>
		<td><?= h($section->slope_neg); ?>&nbsp;</td>
		<td><?= h($section->open); ?>&nbsp;</td>
		<td><?= h($section->close); ?>&nbsp;</td>
		<td><?= h($section->best); ?>&nbsp;</td>
		<td><?= h($section->comments); ?>&nbsp;</td>
		<td><?= h($section->control); ?>&nbsp;</td>
		<td><?= h($section->deleted); ?>&nbsp;</td>
		<td class="actions">
			<?= $this->Html->link(__('View'), ['action' => 'view', $section->id]); ?>
			<?= $this->Html->link(__('Edit'), ['action' => 'edit', $section->id]); ?>
			<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $section->id], ['confirm' => __('Are you sure you want to delete # %s?', $section->id)]); ?>
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
		<li><?= $this->Html->link(__('New Section'), ['action' => 'add']); ?></li>
		<li><?= $this->Html->link(__('List Stages'), ['controller' => 'Stages', 'action' => 'index']); ?> </li>
		<li><?= $this->Html->link(__('New Stage'), ['controller' => 'Stages', 'action' => 'add']); ?> </li>
	</ul>
</div>
