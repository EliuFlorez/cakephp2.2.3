<!--

<div class="divisions index">
	<h2><?php echo __('Divisions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('school_id'); ?></th>
			<th><?php echo $this->Paginator->sort('division_id'); ?></th>
			<th><?php echo $this->Paginator->sort('division_name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($divisions as $division): ?>
	<tr>
		<td><?php echo h($division['Division']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($division['School']['school_name'], array('controller' => 'schools', 'action' => 'view', $division['School']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($division['Division']['division_name'], array('controller' => 'divisions', 'action' => 'view', $division['Division']['id'])); ?>
		</td>
		<td><?php echo h($division['Division']['division_name']); ?>&nbsp;</td>
		<td><?php echo h($division['Division']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $division['Division']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $division['Division']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $division['Division']['id']), null, __('Are you sure you want to delete # %s?', $division['Division']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Division'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Divisions'), array('controller' => 'divisions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Division'), array('controller' => 'divisions', 'action' => 'add')); ?> </li>
	</ul>
</div>


-->
	
	
	
	
	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Divisions</h1>
	</div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized">
		   <?php echo $this->Html->image('/images/shared/side_shadowleft.jpg',array('width'=>'20','height'=>'300'));?>
		</th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized">
		  <?php echo $this->Html->image('/images/shared/side_shadowright.jpg',array('width'=>'20','height'=>'300'));?>
    	</th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">
			
			    <div id="notification">
			        <?php echo $this->Session->flash(); ?>
			   </div>

		  <!--  start product-table ..................................................................................... -->
				
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-check"><?php echo $this->Paginator->sort('id'); ?></th>
					<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('school_id'); ?></th>
					<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('standard_id'); ?></th>
					<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('division_name'); ?></th>
					<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('student_count'); ?></th>
					<th class="table-header-repeat line-left"><?php echo $this->Paginator->sort('created'); ?></th>
					<th class="table-header-repeat line-left"><?php echo $this->Paginator->sort('modified'); ?></th>
					<th class="table-header-options line-left"><a href="">Options</a></th>
				</tr>
		<?php foreach ($divisions as $division):  ?>
		       <tr>
					<td><?php echo h($division['Division']['id']); ?>&nbsp;</td>
					<td><?php echo h($division['School']['school_name']); ?>&nbsp;</td>
					<td><?php echo h($division['Standard']['standard_name']); ?>&nbsp;</td>
					<td><?php echo h($division['Division']['division_name']); ?>&nbsp;</td>
					<td><?php echo h($division['Division']['student_count']); ?>&nbsp;</td>
					<td><?php echo h($division['Division']['created']); ?>&nbsp;</td>
					<td><?php echo h($division['Division']['modified']); ?>&nbsp;</td>
					
     				<td class="options-width">
						<?php echo $this->Html->link('', array('action' => 'view', $division['Division']['id']),array('class'=>'icon-1 info-tooltip','title'=>'View')); ?>
						<?php echo $this->Html->link('', array('action' => 'edit', $division['Division']['id']),array('class'=>'icon-3 info-tooltip','title'=>'Edit')); ?>
						<?php echo $this->Form->postLink('', array('action' => 'delete', $division['Division']['id']), array('class'=>'icon-2 info-tooltip', 'title'=>'delete'), __('Are you sure you want to delete # %s?', $division['Division']['id'])); ?>
					</td>
				</tr>
		<?php endforeach; ?>

				
				</table>
				<!--  end product-table................................... --> 
				
			</div>
			<!--  end content-table  -->
					
			<!--  start paging..................................................... -->
			<table border="0" cellpadding="0" cellspacing="0" id="paging-table">
			<tr>
			<td>
				<div class="paging">
					<?php
						echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
						echo $this->Paginator->numbers(array('separator' => ''));
						echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
					?>
				</div>
			</td>
			</tr>
			</table>
			<!--  end paging................ -->
			
			<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>

	