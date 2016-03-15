<?php include '../assets/php/session.php'; ?>

<?php if($userLogged) header('Location: ../') ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Startuppuccino - Signup</title>
	</head>
	<body>

		<?php // evaluate data if for has been submited else show the form ?>

		<?php if (isset($_POST['submit'])){ ?>

			<?php 

				// Hash password
				$password = md5($_POST['password']);
				// Save email on variable to doublechek if it exsits (see below)
				$account_email = $_POST['mail'];

				// Connect to db
				include '../assets/php/db_connect.php';

				$sql = "INSERT INTO Account (background, email, firstname, lastname, password, role, created, avatar, about )
						VALUES ('" . $_POST['background'] . "',
								'" . $account_email . "',
								'" . $_POST['firstname'] . "',
								'" . $_POST['lastname'] . "',
								'" . $password . "',
								'" . $_POST['role'] . "',
								'" . date() . "',
								'" . $avatar . "',
								'" . $_POST['about'] . "' )";


				// Doublecheck if email already exists
				include '../assets/php/check_email.php';

				// Execute query and evaluate result
				if (mysqli_query($dbconn, $sql)) {
				    
				    echo "New account created successfully";

				    // Include the login script
				    $new_account_email = $account_email;
				    $new_account_password = $password; 

				    include '../login/login.php';

				} else {
//				    echo "Error: " . $sql . "<br>" . mysqli_error($dbconn);
				}

				mysqli_close($dbconn);

			?>

		<?php } else { ?>

			<form action="" method="post" onsubmit="return checkForm();">

				<label>Email</label>
				<input type="email" name="email" placeholder="hello@startuppucino.com" required/>

				<label>Password</label>
				<input type="password" name="password" required/>

				<label>Repeat Password</label>
				<input type="password" name="password1" required/>

				<label>Firstname</label>
				<input type="text" name="firstname" required/>

				<label>Lastname</label>
				<input type="text" name="lastname" required/>

				<label>Background</label>
				<input type="text" name="background" placeholder="e.g. IT, design, law, economics, management" required/>

				<label>About me (optional)</label>
				<textarea name="about" placeholder="More info about me, about my startup idea, etc.">
				</textarea>

				<label>Role</label>
				<label><input type="radio" name="role" value="user" required/>User (I'm here to learn)</label>
				<label><input type="radio" name="role" value="mentor" required/>Mentor (I'm here to help)</label>

				<!--
				<label>Photo (optional)</label>
				<input type="file" name="photo" />
				-->

				<input type="submit" value="Register" name="submit">

			</form>

		<?php } ?>

		<script type="text/javascript">
			function checkForm(){
				//return false;
			}
		</script>

	</body>
</html>
