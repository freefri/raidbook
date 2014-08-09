<div class="sections view">
	<h2><?= __('Section'); ?></h2>
	<dl>
		<dt><?= __('Id'); ?></dt>
		<dd>
			<?= h($section->id); ?>
			&nbsp;
		</dd>
		<dt><?= __('Title'); ?></dt>
		<dd>
			<?= h($section->title); ?>
			&nbsp;
		</dd>
		<dt><?= __('Subtitle'); ?></dt>
		<dd>
			<?= h($section->subtitle); ?>
			&nbsp;
		</dd>
		<dt><?= __('Lenght'); ?></dt>
		<dd>
			<?= h($section->lenght); ?>
			&nbsp;
		</dd>
		<dt><?= __('Slope Pos'); ?></dt>
		<dd>
			<?= h($section->slope_pos); ?>
			&nbsp;
		</dd>
		<dt><?= __('Slope Neg'); ?></dt>
		<dd>
			<?= h($section->slope_neg); ?>
			&nbsp;
		</dd>
		<dt><?= __('Open'); ?></dt>
		<dd>
			<?= h($section->open); ?>
			&nbsp;
		</dd>
		<dt><?= __('Close'); ?></dt>
		<dd>
			<?= h($section->close); ?>
			&nbsp;
		</dd>
		<dt><?= __('Best'); ?></dt>
		<dd>
			<?= h($section->best); ?>
			&nbsp;
		</dd>
		<dt><?= __('Comments'); ?></dt>
		<dd>
			<?= h($section->comments); ?>
			&nbsp;
		</dd>
		<dt><?= __('Control'); ?></dt>
		<dd>
			<?= h($section->control); ?>
			&nbsp;
		</dd>
		<dt><?= __('Deleted'); ?></dt>
		<dd>
			<?= h($section->deleted); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?= __('Actions'); ?></h3>
	<ul>
		<li><?= $this->Html->link(__('Edit Section'), ['action' => 'edit', $section->id]); ?> </li>
		<li><?= $this->Form->postLink(__('Delete Section'), ['action' => 'delete', $section->id], ['confirm' => __('Are you sure you want to delete # %s?', $section->id)]); ?> </li>
		<li><?= $this->Html->link(__('List Sections'), ['action' => 'index']); ?> </li>
		<li><?= $this->Html->link(__('New Section'), ['action' => 'add']); ?> </li>
		<li><?= $this->Html->link(__('List Stages'), ['controller' => 'Stages', 'action' => 'index']); ?> </li>
		<li><?= $this->Html->link(__('New Stage'), ['controller' => 'Stages', 'action' => 'add']); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?= __('Related Stages'); ?></h3>
	<?php if (!empty($section->stages)): ?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?= __('Id'); ?></th>
			<th><?= __('Itinerary Id'); ?></th>
			<th><?= __('Section Id'); ?></th>
			<th class="actions"><?= __('Actions'); ?></th>
		</tr>
		<?php foreach ($section->stages as $stages): ?>
		<tr>
			<td><?= h($stages->id) ?></td>
			<td><?= h($stages->itinerary_id) ?></td>
			<td><?= h($stages->section_id) ?></td>
			<td class="actions">
				<?= $this->Html->link(__('View'), ['controller' => 'Stages', 'action' => 'view', $stages->id]); ?>
				<?= $this->Html->link(__('Edit'), ['controller' => 'Stages', 'action' => 'edit', $stages->id]); ?>
				<?= $this->Form->postLink(__('Delete'), ['controller' => 'Stages', 'action' => 'delete', $stages->id], ['confirm' => __('Are you sure you want to delete # %s?', $stages->id)]); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php endif; ?>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Stage'), ['controller' => 'Stages', 'action' => 'add']); ?> </li>
		</ul>
	</div>
</div>
