<?php include './includes/header.php'; ?>
	<?php 
		if(!isset($_SESSION['logged_in'])) {
			header("Location:./login.php");
		}
	?>
	<div>
		<h3>What would you like to do?</h3>
		<ul class="list-group">
			<li class="list-group-item"><a href="./users.php">List all users</a></li>
			<li class="list-group-item"><a href="./add_user.php">Add a new user</a></li>
			<li class="list-group-item"><a href="#">Administrative tasks <small class="text-danger">[WARNING! Dangerous stuff!]</small></a></li>
		</ul>
	</div>
<?php include './includes/footer.php'; ?>
