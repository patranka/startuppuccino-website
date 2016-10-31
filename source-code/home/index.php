<?php

	require_once '../app/models/session.php';

	// Redirect to home if user is not logged
	if(!$userLogged){
		header("Location: ../");
		exit;
	}

	$currentPage = "home";

?>

<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Home - Startuppuccino</title>
	<link rel="stylesheet" type="text/css" href="../app/assets/newcss/home.css">

	<script type="text/javascript">
		var STARTUPPUCCINO_USER = {
				id : "<?php echo $_SESSION['id']; ?>",
				avatar : "<?php echo empty(trim($_SESSION['avatar'])) ? 'avatar.svg' : $_SESSION['avatar']; ?>"
			};
	</script>


    <?php include '../app/views/extra_head_html.php'; ?>


</head>
<body>

	<?php $page_title = 'Lectures'; ?>

	<?php include '../app/views/header.php'; ?>

	<main>

		<?php include '../app/controllers/course_sessions.php'; ?>

	</main>

	<?php include '../app/views/footer.php'; ?>

	<script src="../app/assets/js/home.js"></script>

</body>
</html>