
    

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
		
	<?php echo $this->Form->create('User'); ?>
		<table border="0" cellpadding="0" cellspacing="0">
			<?php // echo $this->Session->flash('auth'); ?>
			
		
		<tr>
			<th>Username</th>
			<td><input type="text" name="data[User][username]" id="username"  class="login-inp" /></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" name="data[User][password]" value=""  class="login-inp" /></td>
		</tr>
		<tr>
			<th></th>
			<td valign="top"><input type="checkbox" class="checkbox-size" id="login-check" /><label for="login-check">Remember me</label></td>
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
	<a href="" class="forgot-pwd">Forgot Password?</a>
 </div>
 <!--  end loginbox -->
 
	<!--  start forgotbox ................................................................................... -->
	<div id="forgotbox">
		<div id="forgotbox-text">Please send us your username and we'll send password recovery email on your registered email address.</div>
		<p id="response_msg" style="color: red; margin-bottom: 10px; padding-left: 44px; text-align: center;min-height: 15px;"></p>
		<!--  start forgot-inner -->
		<div id="forgot-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Username:</th>
			<td><input type="text" value=""  id="username1" class="login-inp" /></td>
		</tr>
		<tr>
			<th> </th>
			<td><input type="button" id="check_username" class="submit-login"  /></td>
		</tr>
		</table>
		</div>
		<!--  end forgot-inner -->
		<div class="clear"></div>
		<a href="" class="back-login">Back to login</a>
	</div>
	<!--  end forgotbox -->

</div>
<!-- End: login-holder -->





<script type='text/javascript'>

      $(document).ready(function(){
           $("#username").focus();
           
           $(".forgot-pwd").click(function(){
           		$("#username1").focus();	
           });
           
            $(".back-login").click(function(){
           		$("#username").focus();	
           });
           
	       $('#check_username').click(function() {
	       			
	          var username = $('#username1').val();
			  
				if(username!=''){
					
	             $.ajax({
						type:"GET",
						url:"<?php echo $this->Html->url(array('controller'=>'users','action'=>'forgotPassword')) ?>",
						data:"username="+username,
						//dataType:"json",
						success:function(msg){
						   $('#response_msg').html(msg);
						   $("#response_msg").css("color","red");
						},
						error:function(){
						   $('#response_msg').html('Sorry, Internal Server Error ');
						   $("#response_msg").css("color","red");
						}
						

			        });
			    }else{
					$('#response_msg').html("Please enter email address");
					$("#response_msg").css("color","red");
				}	
				$("#response_msg").ajaxStart(function(){
					$(this).html('<?php echo $this->Html->image('processing.gif')?>');
				});
	        });
	    });

            

  
  </script>