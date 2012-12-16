


	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Users</h1>
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
				<?php echo $this->Html->link(__('New User'), array('action' => 'add'));?>
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-check"><?php echo $this->Paginator->sort('id'); ?></th>
					<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('group_id'); ?></th>
					<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('department_id'); ?></th>
					<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('first_name'); ?></th>
					<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('last_name'); ?></th>
					<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('email_address'); ?></th>
					<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('mobile_number'); ?></th>
					<th class="table-header-options line-left"><a href="">Options</a></th>
				</tr>
		<?php foreach ($users as $user): ?>
		       <tr>
					<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
					<td><?php echo h($user['Group']['group_name']); ?>&nbsp;</td>
					<td><?php echo h($user['Department']['department_name']); ?>&nbsp;</td>
					<td><?php echo h($user['User']['first_name']); ?>&nbsp;</td>
					<td><?php echo h($user['User']['last_name']); ?>&nbsp;</td>
					<td><?php echo h($user['User']['email_address']); ?>&nbsp;</td>
					<td><?php echo h($user['User']['mobile_number']); ?>&nbsp;</td>
									
     				<td class="options-width">
						<?php echo $this->Html->link('', array('action' => 'view', $user['User']['id']),array('class'=>'icon-1 info-tooltip','title'=>'View')); ?>
						<?php echo $this->Html->link('', array('action' => 'edit', $user['User']['id']),array('class'=>'icon-3 info-tooltip','title'=>'Edit')); ?>
						<?php echo $this->Form->postLink('', array('action' => 'delete', $user['User']['id']), array('class'=>'icon-2 info-tooltip', 'title'=>'delete'), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
					</td>
				</tr>
		<?php endforeach; ?>
		
		<?php if(empty($users)){ ?>
				 <tr>
					<td colspan="10" style="text-align:center">No records found &nbsp;</td>
				 </tr>	
				
		<?php } ?>		
				</table>
				<!--  end product-table................................... --> 
				
			</div>
			<!--  end content-table  -->
					
			<!--  start paging..................................................... -->
			<table border="0" cellpadding="0" cellspacing="0" id="paging-table">
			<tr>
			<td>
			    <p style="float:right;">
                    <?php
                    echo $this->Paginator->counter(array(
                    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                    ));
                    ?>
                </p><br/>
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

		