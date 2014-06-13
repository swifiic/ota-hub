<?php
	require_once 'includes/constants.php';

	/*
	* Database Connections
	*/
	function connectToDB() {
		$link = mysql_connect(DB_ADDRESS, DB_USER, DB_PASSWORD);
		if (!is_resource($link)) {
			die("Could not connect to the MySQL server at: ".$mysqlServer);
		} else {
			mysql_select_db(DB_NAME);
		}
		return $link;
	}
	function closeDB($link) {
		mysql_close($link);
	}

	/*
	* Getters for User information
	*/
	function getValuesForUser($userID) {
		$link = connectToDB();
		$query = "SELECT * FROM Users WHERE id='{$userID}'";
		$result = mysql_fetch_array(mysql_query($query));
		closeDB($link);
		return $result;
	}
	function getUserID($username) {
		$link = connectToDB();
		$query = "SELECT id FROM Users WHERE username='{$username}'";
		$result = mysql_fetch_array(mysql_query($query));
		closeDB($link);
		$id = $result['id'];
		return $id;
	}
	function getUsername($userID) {
		$link = connectToDB();
		$query = "SELECT username FROM Users WHERE id='{$userID}'";
		$result = mysql_fetch_array(mysql_query($query));
		closeDB($link);
		$username = $result['username'];
		return $username;
	}
?>
