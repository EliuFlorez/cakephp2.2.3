

<div id="page-heading"><h1>View User</h1></div>


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
			<div class="step-dark-left"><a href="">View User details</a></div>
				
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
			
			<tr>
				<th valign="top">User ID :</th>
				<td><?php echo h($user['User']['id']); ?></td>
				<td></td>
			</tr>
			<tr>
				<th valign="top">User Group :</th>
				<td><?php echo h($user['Group']['group_name']); ?></td>
				<td></td>
			</tr>
			<tr>
				<th valign="top">Username :</th>
				<td><?php echo h($user['User']['username']); ?></td>
				<td></td>
			</tr>
			
			<tr>
				<th valign="top">First Name:</th>
				<td><?php echo h($user['User']['first_name']); ?></td>
				<td></td>
			</tr>	
			
			<tr>
				<th valign="top">Middle Name:</th>
				<td><?php echo h($user['User']['middle_name']); ?></td>
				<td></td>
			</tr>
			
			<tr>
				<th valign="top">Last Name:</th>
				<td><?php echo h($user['User']['last_name']); ?></td>
				<td></td>
			</tr>
			
			<tr>
				<th valign="top">Email address:</th>
				<td><?php echo h($user['User']['email_address']); ?></td>
				<td></td>
			</tr>

						
			<tr>
				<th valign="top">Date of birth:</th>
				<td><?php echo h($user['User']['date_of_birth']); ?></td>
				<td></td>
			</tr>
			
			<tr>
				<th valign="top">Gender:</th>
				<td><?php echo h($user['User']['gender']); ?></td>
				<td></td>
			</tr>
			
			<tr>
				<th valign="top">Mobile Number:</th>
				<td><?php echo h($user['User']['mobile_number']); ?></td>
				<td></td>
			</tr>
			
					
			<tr>
				<th valign="top">Fax :</th>
				<td><?php echo h($user['User']['fax']); ?></td>
				<td></td>
			</tr>
			
			<tr>
				<th valign="top">Telephone Number :</th>
				<td><?php echo h($user['User']['telephone_no']); ?></td>
				<td></td>
			</tr>
			
			<tr>
				<th valign="top">Postal address:</th>
				<td><?php echo h($user['User']['address']); ?></td>
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
	
	
	