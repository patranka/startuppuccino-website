<form class="form_custom form_custom--slim" action="" method="post">

	<?php if(!$loginOk){ ?>

		<li class="form_box_item form_box_item--full">
			<p>Account not found, check the inputs data</p>
		</li>

	<?php } ?>

	<li class="form_box_item">
		<label for="email">Email</label>
		<input class="form_pretty_general_input" type="email" name="email" placeholder="Hello@startuppuccino.com" <?php if(isset($_POST['email'])) print('value="'.$_POST['email'].'"'); ?> required/>
	</li>
	
	<li class="form_box_item">
		<label for="password">Password</label>
		<input class="form_pretty_general_input" type="password" name="password" placeholder="Password" <?php if(isset($_POST['password'])) print('value="'.$_POST['password'].'"'); ?> required/>
	</li>
	
	<li class="form_box_item">
		<input class="form_pretty_button_input" type="submit" name="login" value="Login" />
		<span><a class="form_input--forgot_password form_pretty_button_input" href="../resetpassword/" target="_blank">Forgot Password</a></span>
	</li>
	
	<li class="form_box_item form_box_item--full">
        <p>New user? <a class="form_pretty_button_link" href="../signup/">Sign up</a></p>
    </li>

</form>