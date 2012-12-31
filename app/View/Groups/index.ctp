				
	
	<!--  start page-heading -->
	<div id="page-heading">
		<h1>User Groups</h1>
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
				<?php echo $this->Html->link(__('New User Group'), array('action' => 'add'));?>
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr >
					<th class="table-header-check"><?php echo $this->Paginator->sort('id'); ?></th>
					<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('group_name'); ?></th>
					<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('user_count'); ?></th>
					<th class="table-header-repeat line-left minwidth-1"><?php echo $this->Paginator->sort('allow_register'); ?></th>
					<th class="table-header-repeat line-left"><?php echo $this->Paginator->sort('created'); ?></th>
					<th class="table-header-repeat line-left"><?php echo $this->Paginator->sort('modified'); ?></th>
					<th class="table-header-options line-left"><a href="">Options</a></th>
				</tr>
		<?php 	foreach ($groups as $group): ?>
		       <tr>
					<td><?php echo h($group['Group']['id']); ?>&nbsp;</td>
					<td><?php echo h($group['Group']['group_name']); ?>&nbsp;</td>
					<td><?php echo h($group['Group']['user_count']); ?>&nbsp;</td>
					<td><?php if($group['Group']['allow_register']){echo "Yes";}else{echo "No";}; ?>&nbsp;</td>
					<td><?php echo h($group['Group']['created']); ?>&nbsp;</td>
					<td><?php echo h($group['Group']['modified']); ?>&nbsp;</td>
					
     				<td class="options-width">
						<?php echo $this->Html->link('', array('action' => 'view', $group['Group']['id']),array('class'=>'icon-1 info-tooltip','title'=>'View')); ?>
						<?php echo $this->Html->link('', array('action' => 'edit', $group['Group']['id']),array('class'=>'icon-3 info-tooltip','title'=>'Edit')); ?>
						<?php // echo $this->Form->postLink('', array('action' => 'delete', $group['Group']['id']), array('class'=>'icon-2 info-tooltip', 'title'=>'delete'), __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?>
						<a href="#" class="delete" id="<?php echo $group['Group']['id'];?>">Delete</a>
					</td>
				</tr>
		<?php endforeach; ?>
		
		<?php if(empty($groups)){ ?>
			 <tr><td colspan="10" align="center">No records found</td></tr>
		<?php } ?>
				
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

		
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	
	<script type="text/javascript">
    
    // Load the Visualization API and the piechart package.
    google.load('visualization', '1', {'packages':['corechart']});
      
    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);
      
    function drawChart() {
      var jsonData = $.ajax({
          url: "<?php echo $this->Html->url(array('controller'=>'groups','action'=>'getData'))?>",
          dataType:"json",
          async: false
          }).responseText;
          
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(jsonData);

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
      chart.draw(data, {width: 400, height: 240});
    }

    </script>
    
     <div id="chart_div"></div>