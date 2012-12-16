<!--  start page-heading -->
<div id="page-heading">
  <h1><?php echo __('My Profile');?></h1>
</div>
<!-- end page-heading -->


<?php // echo $this->Session->flash(); ?>   

<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><?php echo $this->Html->image('../images/shared/side_shadowleft.jpg',array('width'=>'20','height'=>'300'))?></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><?php echo $this->Html->image('../images/shared/side_shadowright.jpg',array('width'=>'20','height'=>'300'))?></th>
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
			<div class="step-dark-left"><a href="">View Profile</a></div>
			
						
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
   
          
<table class="profile_details" border="0" cellpadding="0" cellspacing="0" width="500" align="center">
  <tbody>
  <tr>
    <td style="border-bottom:1px dotted #ccc;">
    <?php
         if($user['User']['profile_image']!=null){
           echo $this->Html->image('../uploads/user_profile_images/'.$user['User']['profile_image'],array('width'=>'150','height'=>'168'));          	
         }
         if($user['User']['profile_image']==null){
         	if($user['User']['gender']=='Male'){
         		echo $this->Html->image('blank_image_male.jpeg',array('width'=>'150','height'=>'168')); 
         	}else{
         		echo $this->Html->image('blank_image_female.jpeg',array('width'=>'150','height'=>'168')); 
         	}
         }
     ?>
    </td>
  </tr>
  
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
      <tbody>
      <tr>
        <td width="29%"><strong>User Group</strong></td>
        <td width="4%"><strong>:</strong></td>
        <td width="67%"><?php echo $user['UserGroup']['user_group']; ?></td>
      </tr>
      <tr>
        <td><strong>Department</strong></td>
        <td><strong>:</strong></td>
        <td><?php echo $user['Department']['department_name']; ?></td>
      </tr>
      <tr>
        <td><strong>First Name</strong></td>
        <td><strong>:</strong></td>
        <td><?php echo $user['User']['first_name']; ?></td>
      </tr>
   <!--
      <tr>
        <td><strong>Middle Name</strong></td>
        <td><strong>:</strong></td>
        <td><?php echo $user['User']['middle_name']; ?></td>
      </tr>
   -->	  
      <tr>
        <td><strong>Last Name</strong></td>
        <td><strong>:</strong></td>
        <td><?php echo $user['User']['last_name']; ?></td>
      </tr>
	  
       <tr>
        <td><strong>Performance Points</strong></td>
        <td><strong>:</strong></td>
        <td>
		    <?php echo $user['User']['performance_points']; ?>
			<?php  echo $this->Html->link('See points History',array('action'=>'viewPointHistory',AuthComponent::user('id')),array('target'=>'_blank','width'>'400','height'=>'300'));?>
        </td>
      </tr>
	  <tr>
		 <td><strong>Appraisal Doc File</strong></th>
	     <td><strong>:</strong></td>			
		 <td>
			   <?php 
				  if($user['User']['appraisal_doc']==null)
				  echo "Not Uploaded";	
				  echo $this->Html->link($user['User']['appraisal_doc'], array('action' => 'downloadAppraisalDoc',$user['User']['appraisal_doc'])); 
			   ?> 
			   &nbsp;
		 </td>  
	  </tr>
	 <!--
	 <tr>
	      <td><strong>Job Description Word Doc. </strong></td>
		  <td><strong>:</strong></td>	
	      <td>
	                   <?php 
						  if($user['User']['job_description_word']==null)
						  echo "Not Uploaded";	
	                      echo $this->Html->link($user['User']['job_description_word'], array('action' => 'downloadjobDescriptionword',$user['User']['job_description_word'])); 
	                   ?> 
	                   &nbsp;
	       </td>  
	 </tr>
   -->			  
	  <tr>
		 <td><strong>Job Description Pdf </strong></td>
		 <td><string>:</string></td>
		 <td>
			   <?php 
				  if($user['User']['job_description_pdf']==null)
				  echo "Not Uploaded";	
				  echo $this->Html->link($user['User']['job_description_pdf'], array('action' => 'downloadjobDescriptionpdf',$user['User']['job_description_pdf'])); 
			   ?> 
			   &nbsp;
		 </td>  
	  </tr>
			  
      <tr>
        <td><strong>Username</strong></td>
        <td><strong>:</strong></td>
        <td><?php echo $user['User']['username']; ?></td>
      </tr>
      <tr>
        <td><strong>Gender</strong></td>
        <td><strong>:</strong></td>
        <td><?php echo $user['User']['gender']; ?></td>
      </tr>
      <tr>
        <td><strong>Email Id</strong></td>
        <td><strong>:</strong></td>
        <td><?php echo $user['User']['email_address']; ?></td>
      </tr>
      <tr>
        <td><strong>Signature Image</strong></td>
        <td><strong>:</strong></td>
        <td><?php 
				echo $this->Html->image('../uploads/user_signature_images/'.$user['User']['signature_image'],array('width'=>'150','height'=>'50'));    
            ?>
        </td>
      </tr>
      <tr>
        <td><strong>Date Of Birth</strong></td>
        <td><strong>:</strong></td>
        <td><?php echo $user['User']['date_of_birth']; ?></td>
      </tr>
      <tr>
        <td><strong>Contact Number</strong></td>
        <td><strong>:</strong></td>
        <td><?php echo $user['User']['contact_number'];?></td>
      </tr>
      <tr>
        <td><strong>Telephone Number</strong></td>
        <td><strong>:</strong></td>
        <td><?php echo $user['User']['telephone_no']; ?></td>
      </tr>
      <tr>
        <td><strong>Fax Number</strong></td>
        <td><strong>:</strong></td>
        <td><?php echo $user['User']['fax']; ?></td>
      </tr>
      <tr>
        <td><strong>Address</strong></td>
        <td><strong>:</strong></td>
        <td><?php echo $user['User']['address']; ?></td>
      </tr>
      <tr>
        <td><strong>Created Date</strong></td>
        <td><strong>:</strong></td>
        <td><?php echo $user['User']['created']; ?></td>
      </tr>
      <tr>
        <td><strong>Modified Date</strong></td>
        <td><strong>:</strong></td>
        <td><?php echo $user['User']['modified']; ?></td>
      </tr>
    </tbody></table></td>
  </tr>
  </tbody>
</table>
      
	<!-- end id-form  -->

	</td>
	<td>

   
	<!--  start related-activities -->
	<div id="related-activities">

		<!--  start related-act-top -->
		<div id="related-act-top">

		<?php echo $this->Html->image('../images/forms/header_related_act.gif',array('width'=>'271','height'=>'43'))?>
		</div>
		<!-- end related-act-top -->

		<!--  start related-act-bottom -->
		<div id="related-act-bottom">

			<!--  start related-act-inner -->
			<div id="related-act-inner">
			
				 <div class="left">
	                            <a href="">
	                              <?php echo $this->Html->image('../images/forms/icon_edit.gif',array('width'=>'21','height'=>'21'))?>
	                            </a>
	              </div>
                  <div class="right">
                      <h5>View </h5>
                          <ul class="greyarrow">
                                <li><a href="<?php  echo $this->Html->url(array('action'=>'changePassword'))?>">Change Password</a></li>
                         </ul>
                   </div>
                   <div class="clear"></div>
                   <div class="lines-dotted-short"></div>
                        
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
<td> <?php echo $this->Html->image('../images/shared/blank.gif',array('width'=>'695','height'=>'1'))?></td>    
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

















<!-- cakephp default code



<div class="users view">
    
<h2><?php  echo __('User');?></h2>
	<dl>
                <dt><?php echo " " ?></dt>
		<dd>
			<?php if(h($user['User']['profile_image'])==null){
                          
                        }else{

                          echo $this->Html->image('../uploads/'.$user['User']['profile_image'],array('width'=>150,'height'=>150));
                        }
                            ?>
                        
			&nbsp;
		</dd>
                
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
                <dt><?php echo __('User Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['UserGroup']['user_group'], array('controller' => 'user_groups', 'action' => 'view', $user['UserGroup']['id'])); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['middle_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['last_name']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($user['User']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($user['User']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Number'); ?></dt>
		<dd>
			<?php echo h($user['User']['contact_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($user['User']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php if(h($user['User']['is_active'])==0) echo "Yes"; ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
	</ul>
</div>


-->