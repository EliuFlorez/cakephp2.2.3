	
	

<div id="page-heading"><h1>School</h1></div>


<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized">
		<?php echo $this->Html->image('/images/shared/side_shadowleft.jpg',array('width'=>'20','height'=>'300','alt'=>''));?>
	</th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized">
	   <?php echo $this->Html->image('/images/shared/side_shadowright.jpg',array('width'=>'20','height'=>'300','alt'=>''));?>
	</th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
	
	
		<!--  start step-holder -->
		<div id="step-holder">
			<div class="step-no">1</div>
			<div class="step-dark-left"><a href="">View school details</a></div>
		
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
	
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
			
			<tr>
				<th valign="top">School id:</th>
				<td><?php echo $school['School']['id']; ?></td>
				<td>
				
				</td>
			</tr>
			<tr>
				<th valign="top">School name:</th>
				<td><?php echo $school['School']['school_name']; ?></td>
				<td>
				
				</td>
			</tr>
			<tr>
				<th valign="top">Registration number:</th>
				<td><?php echo $school['School']['registration_number']; ?></td>
				<td></td>
			</tr>	
			<tr>
				<th valign="top">Conact Number:</th>
				<td><?php echo $school['School']['contact_number']; ?></td>
				<td></td>
			</tr>
		
			<tr>
				<th valign="top">Address:</th>
				<td><?php echo $school['School']['location']; ?></td>
				<td></td>
			</tr>
			
			<tr>
				<th valign="top">Created:</th>
				<td><?php echo $school['School']['created']; ?></td>
				<td></td>
			</tr>
			
			<tr>
				<th valign="top">Updated:</th>
				<td><?php echo $school['School']['modified']; ?></td>
				<td></td>
			</tr>
	
			
		</table>
	  
	<!-- end id-form  -->

	</td>
	<td>

	<!--  start related-activities -->
	<div id="related-activities">
		
		<!--  start related-act-top -->
		<div id="related-act-top">
		   <?php echo $this->Html->image('/images/forms/header_related_act.gif',array('width'=>'271','height'=>'43','alt'=>''));?>
		</div>
		<!-- end related-act-top -->
		
		<!--  start related-act-bottom -->
		<div id="related-act-bottom">
		
			<!--  start related-act-inner -->
			<div id="related-act-inner">
			
				<div class="left"><a href="">
				  <?php echo $this->Html->image('/images/forms/icon_plus.gif',array('width'=>'21','height'=>'21','alt'=>''));?>
				 </a></div>
				<div class="right">
					<h5>Add another product</h5>
					Lorem ipsum dolor sit amet consectetur
					adipisicing elitsed do eiusmod tempor.
					<ul class="greyarrow">
						<li><a href="">Click here to visit</a></li> 
						<li><a href="">Click here to visit</a> </li>
					</ul>
				</div>
				
				<div class="clear"></div>
				<div class="lines-dotted-short"></div>
				
				<div class="left"><a href="">
				  <?php echo $this->Html->image('/images/forms/icon_minus.gif',array('width'=>'21','height'=>'21','alt'=>''));?>
				  </a></div>
				<div class="right">
					<h5>Delete products</h5>
					Lorem ipsum dolor sit amet consectetur
					adipisicing elitsed do eiusmod tempor.
					<ul class="greyarrow">
						<li><a href="">Click here to visit</a></li> 
						<li><a href="">Click here to visit</a> </li>
					</ul>
				</div>
				
				<div class="clear"></div>
				<div class="lines-dotted-short"></div>
				
				<div class="left"><a href="">
				  <?php echo $this->Html->image('/images/forms/icon_edit.gif',array('width'=>'21','height'=>'21','alt'=>''));?>	
				  </a>
				  
				  </div>
				<div class="right">
					<h5>Edit categories</h5>
					Lorem ipsum dolor sit amet consectetur
					adipisicing elitsed do eiusmod tempor.
					<ul class="greyarrow">
						<li><a href="">Click here to visit</a></li> 
						<li><a href="">Click here to visit</a> </li>
					</ul>
				</div>
				<div class="clear"></div>
				
			</div>
			<!-- end related-act-inner -->
			<div class="clear"></div>
		
		</div>
		<!-- end related-act-bottom -->
	
	</div>
	<!-- end related-activities -->

</td>
</tr>
<tr>
<td>
   <?php echo $this->Html->image('/images/shared/blank.gif',array('width'=>'695','height'=>'1','alt'=>'blank'));?>
</td>
<td></td>
</tr>
</table>
 
<div class="clear"></div>
  



  
<div class="related">
	<h3><?php echo __('Related Divisions'); ?></h3>
	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Division'), array('controller' => 'divisions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
	<?php if (!empty($school['Division'])): ?>
	
	<!--  start product-table ..................................................................................... -->
				
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-check"><a href=""><?php echo __('Id'); ?></a></th>
					<th class="table-header-repeat line-left minwidth-1"><a href=""><?php echo __('Division name'); ?></a></th>
					<th class="table-header-repeat line-left"><a href=""><?php echo __('Created'); ?></a></th>
					<th class="table-header-repeat line-left"><a href=""><?php echo __('Modified'); ?></a></th>
					
					<th class="table-header-options line-left"><a href="">Options</a></th>
				</tr>
		<?php $i = 0; foreach ($school['Division'] as $division): ?>
		      <tr>
		        <td><?php echo $division['id']; ?></td>
				<td><?php echo $division['division_name']; ?></td>
				<td><?php echo $division['created']; ?></td>
				<td><?php echo $division['modified']; ?></td>
				<td class="actions">
					
					<?php echo $this->Html->link('', array('controller' => 'divisions','action' => 'view', $division['id']),array('class'=>'icon-1 info-tooltip','title'=>'View')); ?>
					<?php echo $this->Html->link('', array('controller' => 'divisions','action' => 'edit', $division['id']),array('class'=>'icon-3 info-tooltip','title'=>'Edit')); ?>
					<?php echo $this->Form->postLink('', array('controller' => 'divisions','action' => 'delete', $division['id']), array('class'=>'icon-2 info-tooltip', 'title'=>'delete'), __('Are you sure you want to delete # %s?', $division['id'])); ?>
						
				</td>
			</tr>
		<?php endforeach; ?>

				
				</table>
				<!--  end product-table................................... --> 
	
<?php endif; ?>

	
</div>


</div>
<!--  end content-table-inner  -->
</td>
<td id="tbl-border-right"></td>
</tr>
<tr>
	<th class="sized bottomleft"></th>
	<td id="tbl-border-bottom">&nbsp;</td>
	<th class="sized bottomright"></th>
</tr>
</table>
		