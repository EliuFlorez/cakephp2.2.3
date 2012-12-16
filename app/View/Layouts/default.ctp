<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>

		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('screen','custom','datePicker'));
		echo $this->Html->script(array('jquery-1.8.3.min','ui.core','ui.checkbox','jquery.bind','jquery.selectbox-0.5','jquery.selectbox-0.5_style_2','jquery.filestyle','custom_jquery','jquery.tooltip','jquery.dimensions','date','jquery.datePicker','jquery.pngFix.pack'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	
	 <script type="text/javascript">
		$(function(){
			$('input').checkBox();
			$('#toggle-all').click(function(){
		 	$('#toggle-all').toggleClass('toggle-checked');
			$('#mainform input[type=checkbox]').checkBox('toggle');
			return false;
			});
		});
	</script>  
	
	<script type="text/javascript">
		$(document).ready(function() {
			$('.styledselect').selectbox({ inputClass: "selectbox_styled" });
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
			$('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
		});
	</script>
	
	<script type="text/javascript" charset="utf-8">
	  $(function() {
	      $("input.file_1").filestyle({ 
	          image: "images/forms/choose-file.gif",
	          imageheight : 21,
	          imagewidth : 78,
	          width : 310
	      });
	  });
	</script>

	<script type="text/javascript">
		$(function() {
			$('a.info-tooltip ').tooltip({
				track: true,
				delay: 0,
				fixPNG: true, 
				showURL: false,
				showBody: " - ",
				top: -35,
				left: 5
			});
		});
	</script> 
	
	<script type="text/javascript" charset="utf-8">
        $(function(){

		// initialise the "Select date" link
		$('#date-pick')
			.datePicker(
				// associate the link with a date picker
				{
					createButton:false,
					startDate:'01/01/2005',
					endDate:'31/12/2020'
				}
			).bind(
				// when the link is clicked display the date picker
				'click',
				function()
				{
					updateSelects($(this).dpGetSelected()[0]);
					$(this).dpDisplay();
					return false;
				}
			).bind(
				// when a date is selected update the SELECTs
				'dateSelected',
				function(e, selectedDate, $td, state)
				{
					updateSelects(selectedDate);
				}
			).bind(
				'dpClosed',
				function(e, selected)
				{
					updateSelects(selected[0]);
				}
			);
			
		var updateSelects = function (selectedDate)
		{
			var selectedDate = new Date(selectedDate);
			$('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
			$('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
			$('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
		}
		// listen for when the selects are changed and update the picker
		$('#d, #m, #y')
			.bind(
				'change',
				function()
				{
					var d = new Date(
								$('#y').val(),
								$('#m').val()-1,
								$('#d').val()
							);
					$('#date-pick').dpSetSelected(d.asString());
				}
			);
		
		// default the position of the selects to today
		var today = new Date();
		updateSelects(today.getTime());
		
		// and update the datePicker to reflect it...
		$('#d').trigger('change');
		});
	</script>
			<script type="text/javascript">
		$(document).ready(function(){
		$(document).pngFix( );
		});
</script>

</head>
<body>
	
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">

	<!-- start logo -->
	<div id="logo">
	<a href="">
	 
	  <?php echo $this->Html->image('/images/shared/logo.png',array('width'=>'156','height'=>'40','alt'=>''));?>
	</a>
	</div>
	<!-- end logo -->
	
	<!--  start top-search -->
	<div id="top-search">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td><input type="text" value="Search" onblur="if (this.value=='') { this.value='Search'; }" onfocus="if (this.value=='Search') { this.value=''; }" class="top-search-inp" /></td>
		<td>
		<select  class="styledselect">
			<option value=""> All</option>
			<option value=""> Products</option>
			<option value=""> Categories</option>
			<option value="">Clients</option>
			<option value="">News</option>
		</select> 
		</td>
		<td>
		  <?php echo $this->Html->image('/images/shared/top_search_btn.gif',array('alt'=>''));?>
		</td>
		</tr>
		</table>
	</div>
 	<!--  end top-search -->
 	<div class="clear"></div>

</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->
	
<div class="clear">&nbsp;</div>
 
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 

		<!-- start nav-right -->
		<div id="nav-right">
		
			<div class="nav-divider">&nbsp;</div>
			<div class="showhide-account">
			   
			   <?php echo $this->Html->image('/images/shared/nav/nav_myaccount.gif',array('width'=>'93','height'=>'14'))?>
			</div>
			<div class="nav-divider">&nbsp;</div>
			<a href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'logout')) ?>" id="logout">
			   <?php echo $this->Html->image('/images/shared/nav/nav_logout.gif',array('width'=>'64','height'=>'14'))?>
			</a>
			<div class="clear">&nbsp;</div>
		
			<!--  start account-content -->	
			<div class="account-content">
			<div class="account-drop-inner">
				<a href="" id="acc-settings">Settings</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-details">Personal details </a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-project">Project details</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-inbox">Inbox</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-stats">Statistics</a> 
			</div>
			</div>
			<!--  end account-content -->
		
		</div>
		<!-- end nav-right -->


		<!--  start nav -->
		<div class="nav">
		<div class="table">
		
		<ul class="select"><li><a href="#nogo"><b>Dashboard</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="#nogo">Dashboard Details 1</a></li>
				<li><a href="#nogo">Dashboard Details 2</a></li>
				<li><a href="#nogo">Dashboard Details 3</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select <?php if(($this->params->controller =='users') ||($this->params->controller =='groups')){echo 'current';}?>">
		<li><a href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'index'))?>"><b>User Management</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub <?php if(($this->params->controller =='users') ||($this->params->controller =='groups')){echo 'show';}?>">
			<ul class="sub">
				<li><a href="<?php echo $this->Html->url(array('controller'=>'groups','action'=>'index'));?>">User Groups</a></li>
				<li><a href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'index'));?>">Users</a></li>
		    </ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="select <?php  if(($this->params->controller =='companies') ||($this->params->controller =='departments')){echo 'current';}?>"><li><a href="<?php echo $this->Html->url(array('controller'=>'companies','action'=>'index'))?>"><b>Company Mgmt</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub <?php if(($this->params->controller =='companies') ||($this->params->controller =='departments')){echo 'show';}?>">
			<ul class="sub">
				<li><a href="<?php echo $this->Html->url(array('controller'=>'companies','action'=>'index'));?>">Company</a></li>
				<li><a href="<?php echo $this->Html->url(array('controller'=>'departments','action'=>'index'));?>">Departments</a></li>
				
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
				
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

 <div class="clear"></div>
  
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

    		<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

 

<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->

<div class="clear">&nbsp;</div>
    
<!-- start footer -->         
<div id="footer">
	<!--  start footer-left -->
	<div id="footer-left">
	
	Admin Skin &copy; Copyright Internet Dreams Ltd. <span id="spanYear"></span> <a href="">www.netdreams.co.uk</a>. All rights reserved.</div>
	<!--  end footer-left -->
	<div class="clear">&nbsp;</div>
</div>
<!-- end footer -->
	
</body>
</html>
