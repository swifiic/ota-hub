<?php include './includes/header.php'; ?>
	<?php 
		if(isset($_POST['addUser'])) {
			$alias = $_POST['alias'];
			$username = $_POST['username'];
			$dtnId = $_POST['dtnID'];
			$link = connectToDB();
			$query = "INSERT INTO Users(username, alias, dtn_id) VALUES ('{$username}','{$alias}','{$dtnId}')";
			mysql_query($query, $link);
			closeDB($link);
			header("Location:./users.php");
		}
	?>
	<div>
		<h3>Enter details for new user</h3>
		<?php include './includes/user_form.php'; ?>
	</div>
<?php include './includes/footer.php'; ?>