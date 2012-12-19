<?php 

	$menuArray = array();
	$title     = array();
	$slug      = 'admin'; // $this->Session->read('slug');
	
	//My Profile
	$menuArray[] = $this->Html->link($this->Html->image('/images/shared/profile.png',array('width'=>'80','height'=>'81')),array('controller'=>'users','action'=>'myProfile'),  array('class' => 'info-tooltip','title'=>'My Profile', 'escape' => false));
	$title[]='My Profile';

//<!-------------------------   Admin User Links Starts here -------------------------------------------------------->
 
 if($slug == 'admin'){
 	//View User Groups
	$menuArray[] = $this->Html->link($this->Html->image('/images/shared/user_group.png',array('width'=>'80','height'=>'81')),array('controller'=>'groups','action'=>'index'),  array('class' => 'info-tooltip','title'=>'View User Groups', 'escape' => false));
	$title[]='View User Groups';
	
    //View Users 	
	$menuArray[] = $this->Html->link($this->Html->image('/images/shared/user.png',array('width'=>'80','height'=>'81')),array('controller'=>'users','action'=>'index'),  array('class' => 'info-tooltip','title'=>'View Users', 'escape' => false));
	$title[]='View Users';
	
	
	/*
	//NonConformance Types
	$menuArray[] = $this->Html->link($this->Html->image('/images/shared/Nonconformances-types.png',array('width'=>'80','height'=>'81')),array('controller'=>'NonConformanceTypes','action'=>'index',AuthComponent::user('id')),  array('class' => 'info-tooltip','title'=>'Non-conformance Types', 'escape' => false));
	$title[]='Non-conformance Types';
	
	//Issue NonConformance
	$menuArray[] = $this->Html->link($this->Html->image('/images/shared/Nonconformances.png',array('width'=>'80','height'=>'81')),array('controller'=>'NonConformances','action'=>'allNonConformances'),  array('class' => 'info-tooltip','title'=>'Issue Non-conformance', 'escape' => false));
	$title[]='Non-conformances';
	
	//My Corrective Actions
	$menuArray[] = $this->Html->link($this->Html->image('/images/shared/corrective-actions.png',array('width'=>'80','height'=>'81')),array('controller'=>'corrective_actions','action'=>'allCorrectiveActions'),  array('class' => 'info-tooltip','title'=>'My Corrective Actions', 'escape' => false));
	$title[]='My Corrective Actions';
	
	//All Preventive Action Request
	$menuArray[] = $this->Html->link($this->Html->image('/images/shared/preventive-action.png',array('width'=>'80','height'=>'81')),array('controller'=>'preventive_action_requests','action'=>'allPar'),  array('class' => 'info-tooltip','title'=>'All Preventive Action Request', 'escape' => false));
	$title[]='All Preventive Action Request';
	
	$menuArray[] = $this->Html->link($this->Html->image('/images/shared/departments.png',array('width'=>'80','height'=>'81')),array('controller'=>'Departments','action'=>'index'),  array('class' => 'info-tooltip','title'=>'Departments', 'escape' => false));
	$title[]='Departments';
	
	//Add Document Categories
	$menuArray[] = $this->Html->link($this->Html->image('/images/shared/add-category.png'),array('controller'=>'documentCategories','action'=>'index'),  array('class' => 'info-tooltip','title'=>'View Document Categories', 'escape' => false));
	$title[]='View Document Categories';
	
	//Add Standard Operating Procedures
	$menuArray[] = $this->Html->link($this->Html->image('/images/shared/sop.png'),array('controller'=>'SopDocumentCategories','action'=>'index'),  array('class' => 'info-tooltip','title'=>'View SOP Document Categories', 'escape' => false));
	$title[]='View SOP Document Categories';
	*/
}

?>


	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Dashboard</h1>
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
		
		 <div class="dashboard">

		    <div class="dashboard_icon">
		    	<ul>
		    	
		    	 <?php
			        if($menuArray)
			        { 
			        	
			        	
			        	$i=0;
			        	foreach($menuArray as $key=>$value ){
			        		echo "<li>" .$value."<center><b>".$title[$i++]."</b></center></li>"; 
			        		
			        	}
			        }
			     ?>
		       </ul>
		         
		     </div>
		   
		   </div> 
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

		