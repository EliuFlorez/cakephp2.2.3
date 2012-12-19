<div class="standards index">
	<h2><?php echo __('Standards'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('school_id'); ?></th>
			<th><?php echo $this->Paginator->sort('division_id'); ?></th>
			<th><?php echo $this->Paginator->sort('standard_name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($standards as $standard): ?>
	<tr>
		<td><?php echo h($standard['Standard']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($standard['School']['school_name'], array('controller' => 'schools', 'action' => 'view', $standard['School']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($standard['Division']['division_name'], array('controller' => 'divisions', 'action' => 'view', $standard['Division']['id'])); ?>
		</td>
		<td><?php echo h($standard['Standard']['standard_name']); ?>&nbsp;</td>
		<td><?php echo h($standard['Standard']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $standard['Standard']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $standard['Standard']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $standard['Standard']['id']), null, __('Are you sure you want to delete # %s?', $standard['Standard']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Standard'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Divisions'), array('controller' => 'divisions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Division'), array('controller' => 'divisions', 'action' => 'add')); ?> </li>
	</ul>
</div>
