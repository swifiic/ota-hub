<?php
	require_once 'includes/functions.php';
	$link = connectToDb();
	$userId = mysql_escape_string($_GET['userId']);
	$query = "SELECT profile_pic FROM Users WHERE id='{$userId}'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	if(empty($row['profile_pic'])) {
		$file = fopen("img/default_user.jpg", "r");
		$image = fread($file, 51200);
		fclose($file);
	} else {
		$image = $row['profile_pic'];
	}
	header('Content-Type: image/jpeg');
	echo $image;
?>
