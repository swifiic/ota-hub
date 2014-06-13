<?php
	include './includes/header.php';
	if(isset($_POST['addUser'])) {
		$alias = mysql_escape_string($_POST['alias']);
		$username = mysql_escape_string($_POST['username']);
		$dtnId = mysql_escape_string($_POST['dtnID']);
		$maxsize = 60000; // set to ~50KB
    	if($_FILES['profilePic']['error']==0) {
    		$picBlob = mysql_escape_string(file_get_contents($_FILES['profilePic']['tmp_name']));
    		$mime = mysql_escape_string($_FILES['uploaded_file']['type']);
	    }
		$link = connectToDB();
		$query = "INSERT INTO Users(username, alias, dtn_id, profile_pic) VALUES ('{$username}','{$alias}','{$dtnId}','{$picBlob}')";
		$result = mysql_query($query, $link);
		closeDB($link);
		if($result) {
			header("Location:./users.php");
		} else {
			$message = "Something went wrong try again.";
		}
	}
?>
	<div>
		<h3>Enter details for new user</h3>
		<?php echo "<p class=\"text-danger\">{$message}</p>"; ?>
		<?php include './includes/user_form.php'; ?>
	</div>
<?php include './includes/footer.php'; ?>
