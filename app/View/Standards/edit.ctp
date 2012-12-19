<div class="standards form">
<?php echo $this->Form->create('Standard'); ?>
	<fieldset>
		<legend><?php echo __('Edit Standard'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('school_id');
		echo $this->Form->input('division_id');
		echo $this->Form->input('standard_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Standard.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Standard.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Standards'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Divisions'), array('controller' => 'divisions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Division'), array('controller' => 'divisions', 'action' => 'add')); ?> </li>
	</ul>
</div>
