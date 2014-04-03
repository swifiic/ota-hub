<?php include './includes/header.php'; ?>
	<?php
		unset($_SESSION['logged_in']);
		session_destroy();
		header("Location:./login.php?logout=1");
	?>
