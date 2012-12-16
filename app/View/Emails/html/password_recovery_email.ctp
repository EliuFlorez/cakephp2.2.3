<?php $base_url = Router::url('/', true); ?>

      <table width="100%" border="0" cellpadding="5" cellspacing="0">
	      <tr>
	        <td height="25" colspan="3" style="background-color:#eeeded; font-size:13px; font-weight:bold;">
    	          Password Recovery Email
	        </td>
	      </tr>
	      <tr>
	        <td height="25" colspan="3">
    	          Hi <?php echo $user_data['User']['first_name']?>,<br/>
	              This is password recovery link sent to you.
	              Click <a href="<?php echo $base_url;?>users/resetPassword/<?php echo $temporary_password;?>">here</a>
			 to reset password. 
	        </td>
	      </tr>
       </table>
