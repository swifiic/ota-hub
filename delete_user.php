<?php include './includes/header.php'; ?>
	<?php
		if(isset($_POST['deleteConfirmed'])) {
			$userID = $_POST['userID'];
			$link = connectToDB();
			$query = "DELETE FROM Users WHERE id='{$userID}'";
			mysql_query($query);
			header("Location:./users.php");
		}
	?>
	<div>
		<h3>Are you sure you want to delete the user - "<?php echo getUsername($_GET['userID']); ?>"?</h3>
		<br>
		<form action="delete_user.php" method="POST">
			<input type="hidden" name="userID" value="<?php echo $_GET['userID']; ?>"/>
			<input type="submit" class="btn btn-danger" name="deleteConfirmed" value="Yes!"/>
			<a href="./users.php" class="btn btn-default">Cancel</a>
		</form>
	</div>
<?php include './includes/footer.php'; ?>