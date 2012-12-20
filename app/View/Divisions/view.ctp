<div class="standards view">
<h2><?php  echo __('Standard'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($standard['Standard']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('School'); ?></dt>
		<dd>
			<?php echo $this->Html->link($standard['School']['school_name'], array('controller' => 'schools', 'action' => 'view', $standard['School']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Division'); ?></dt>
		<dd>
			<?php echo $this->Html->link($standard['Division']['division_name'], array('controller' => 'divisions', 'action' => 'view', $standard['Division']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Standard Name'); ?></dt>
		<dd>
			<?php echo h($standard['Standard']['standard_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($standard['Standard']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Standard'), array('action' => 'edit', $standard['Standard']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Standard'), array('action' => 'delete', $standard['Standard']['id']), null, __('Are you sure you want to delete # %s?', $standard['Standard']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Standards'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Standard'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Divisions'), array('controller' => 'divisions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Division'), array('controller' => 'divisions', 'action' => 'add')); ?> </li>
	</ul>
</div>
