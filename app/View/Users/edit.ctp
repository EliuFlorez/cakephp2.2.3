
	

<div id="page-heading"><h1>Add User</h1></div>


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
			<div class="step-dark-left"><a href="">Add User details</a></div>
				
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
	<?php echo $this->Form->create('User', array(
										    'inputDefaults' => array(
										        'label' => false,
										        'div' => false,
										        'class'=>'inp-form'
										    )
										));
	 ?>	
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
			
			<tr>
				<th valign="top">User Group :</th>
				<td><?php
 					  echo $this->Form->input('id');	
					  echo $this->Form->input('group_id',array('class'=>'styledselect_form_1','empty'=>'Choose One')); 
					?>
				</td>
				<td></td>
			</tr>
			
			<tr>
				<th valign="top">Department :</th>
				<td><?php echo $this->Form->input('department_id',array('class'=>'styledselect_form_1','empty'=>'Choose One')); ?></td>
				<td></td>
			</tr>
			
			<tr>
				<th valign="top">First Name:</th>
				<td><?php echo $this->Form->input('first_name'); ?></td>
				<td></td>
			</tr>	
			
			<tr>
				<th valign="top">Middle Name:</th>
				<td><?php echo $this->Form->input('middle_name'); ?></td>
				<td></td>
			</tr>
			
			<tr>
				<th valign="top">Last Name:</th>
				<td><?php echo $this->Form->input('last_name'); ?></td>
				<td></td>
			</tr>
			
			<tr>
				<th valign="top">Email address:</th>
				<td><?php echo $this->Form->input('email_address'); ?></td>
				<td>Email address will be used for login</td>
			</tr>

					
			<tr>
				<th valign="top">Date of birth:</th>
				<td><?php echo $this->Form->input('date_of_birth'); ?></td>
				<td></td>
			</tr>
			
			<tr>
				<th valign="top">Gender:</th>
				<td><?php echo $this->Form->input('gender',array(
													'options'=>array(
														'Male'=>'Male',
														'Female'=>'Female'
													),
													'class'=>'styledselect_form_1',
													'empty'=>'Choose One'
													)); ?></td>
				<td></td>
			</tr>
			
			<tr>
				<th valign="top">Mobile Number:</th>
				<td><?php echo $this->Form->input('mobile_number'); ?></td>
				<td></td>
			</tr>
			
			<tr>
				<th valign="top">Fax :</th>
				<td><?php echo $this->Form->input('fax'); ?></td>
				<td></td>
			</tr>
			
			<tr>
				<th valign="top">Telephone Number :</th>
				<td><?php echo $this->Form->input('telephone_number'); ?></td>
				<td></td>
			</tr>
			
			<tr>
				<th valign="top">Postal address:</th>
				<td><?php echo $this->Form->input('postal_address',array('class'=>'form-textarea')); ?></td>
				<td></td>
			</tr>
				
			<tr>
				<th>&nbsp;</th>
				<td valign="top">
					<?php
					    
					   echo $this->Form->button('', array('class'=>'form-submit','type' => 'submit')); 
					   echo $this->Form->button('', array('class'=>'form-reset','type' => 'reset'));
					   
					?>
				</td>
				<td></td>
			</tr>
		</table>
	  </form>	
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
	
	
		