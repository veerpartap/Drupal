<?php #print $name; // Display username field ?>
<?php #print $pass; // Display Password field ?>
<?php #print $submit; // Display submit button ?>
<?php #print $rendered; // Display hidden elements (required for successful login) ?>

<div style="margin:0px:padding:2px;">
	<?php 		#echo "<pre>"; print_r(get_defined_vars());	echo "</pre>";	?>

		<form accept-charset="UTF-8" id="user-login-form" method="post" action="/node?destination=node">
			<div>
				<style type="text/css" media="all">@import "<?php print base_path() . path_to_theme() ?>/user_bar.css";</style>

				<div id="header_navigation"> 

				<div id="user-bar">
				  <div>
				    <div class="form-item form-type-textfield form-item-name">
		  				<label for="edit-name">Username <span title="This field is required." class="form-required">*</span></label>
		 				<input type="text" class="form-text required" maxlength="30" size="30" value="" name="name" id="edit-name">
					</div>
				    <div class="form-item form-type-password form-item-pass">
		  				<label for="edit-pass">Password <span title="This field is required." class="form-required">*</span></label>
		 				<input type="password" class="form-text required" maxlength="20" size="30" name="pass" id="edit-pass">
					</div>

			    	<input type="submit" class="form-submit" value="Log in" name="op" id="edit-submit">		    
			    	<div class="clearfix">
			    		<a title="Request new password via e-mail." href="/user/password">Forgot your password?</a> 
			    		<a class="register-link" title="Create a new user account." href="/user/register">Sign up</a>
			    	</div>
			    	
			    	<input type="hidden" value="<?php print $elements['form_build_id']['#value']; ?>" name="form_build_id" />
					<input type="hidden" value="user_login_block" name="form_id">
					<div id="edit-actions" class="form-actions form-wrapper"></div>		  
			</div>
		</div>

		</div>
		<div style="clear:both;"></div>
		</div>
		</form>
</div>