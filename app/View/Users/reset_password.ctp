

<style type='text/css'>
	 form .error-message {
		background: none repeat scroll 0 0 transparent;
		border: medium none;
		margin: 0;
		padding-left: 24px;
		padding-right: 0;
	} 
	 .error-message {
		color: black;
		font-size: 13px;
		font-weight:bold;
	}
</style>



    

<!-- Start: login-holder -->
<div id="login-holder">
    
	<!-- start logo -->
	<div id="logo-login">
		<center><?php echo $this->Session->flash(); ?></center>
		<a href="index.html">
		  <?php echo $this->Html->image('/images/shared/logo.png',array('width'=>'156','height'=>'40'))?>
		</a>
	</div>
	<!-- end logo -->

	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	<div id="login-inner">
		
	<?php echo $this->Form->create('User',array('action'=>'resetPassword')); ?>
		<table border="0" cellpadding="0" cellspacing="0">
			<?php // echo $this->Session->flash('auth'); ?>
			
		
		<tr>
			<th>Password</th>
			<td>
				<?php echo $this->Form->input('id')?>
		        <?php echo $this->Form->input('temporary_password',array('type'=>'hidden'))?>
   	     		<input type="text" name="data[User][password]" id="username"  class="login-inp" />
			</td>
		</tr>
		<tr>
			<th>Confirm Password</th>
			<td><input type="password" name="data[User][confirm_password]" value=""  class="login-inp" /></td>
		</tr>
		<tr>
			<th></th>
			<td valign="top"></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" class="submit-login"  /></td>
		</tr>
		</table>
	 </form>	
	</div>
 	<!--  end login-inner -->
	<div class="clear"></div>
	<a href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'login'))?>" >Forgot Password?</a>
 </div>
 <!--  end loginbox -->
 


</div>
<!-- End: login-holder -->

