<?php
	
	include '../assets/php/session.php';

	// default global variable to switch and redirect if login is successful
	$loginOk = true;

	if( !$userLogged
		&& ( ($new_account_email != "" && $new_account_password != "") 
			  || (isset($_POST['login'])) ) ) {

		include '../assets/php/db_connect.php';


		// Set the right value to check
		// This let you use this script to login from different pages of the web application
		// e.g. -> used from /login/ and /signup/ 
		if(isset($_POST['login'])){
			$login_mail = $_POST['email'];
			$login_password = md5($_POST['password']);
		} else {
			$login_mail = $new_account_email;
			$login_password = $new_account_password;
		}

		// check the account matching password and email
		$account = mysqli_query($dbconn, "SELECT id, avatar, background, email, firstname, lastname, role FROM Account WHERE email='" . $login_mail . "' AND password='" . $login_password . "'");

		// query result is ok if only one match is found (one account)
		if (mysqli_num_rows($account) == 1) {

		    while($row = mysqli_fetch_assoc($account)) {
		        foreach ($row as $key => $value) {
		        	// save all the data in the session array (not sensible data - like 'password')
		        	$_SESSION[$key] = $value;
		        }
		    }

		    // if isset the POST parameter 'redirect'
		    if (isset($_POST['redirect'])){
		    	// javascript (client) redirect to home page
		    	echo "<script>window.location='../'</script>";
		    }

		} else {
		    
		    // Account not found
			$loginOk = false;

		}

		mysqli_close($dbconn);

	} else {

		// prevent to execute the script if no data are detected
		echo ":)";

		$loginOk = false;
	
	}

?>