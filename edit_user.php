<?php include './includes/header.php'; ?>
	<?php 
		if(isset($_POST['editUser'])) {
			$alias = $_POST['alias'];
			$username = $_POST['username'];
			$dtnId = $_POST['dtnID'];
			$id=$_POST['userID'];
			$link = connectToDB();
			$query = "UPDATE Users SET alias='{$alias}', username='{$username}', dtn_id='{$dtnId}' WHERE id={$id}";
			mysql_query($query, $link);
			closeDB($link);
			header("Location:./users.php");
		}
	?>
	<div>
		<h3>Edit details for: <span><?php echo getUsername($_GET['userID']); ?><span></h3>
		<?php include "./includes/user_form.php"; ?>
	</div>
<?php include './includes/footer.php'; ?>
