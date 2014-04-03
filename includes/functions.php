<?php

	function connectToDB() {
		$mysqlServer = 'localhost';
		$mysqlUser = 'root';
		$mysqlPassword = 'why';
		$db = 'swifiic';
		$link = mysql_connect($mysqlServer, $mysqlUser, $mysqlPassword);
		if (!is_resource($link)) {
			die("Could not connect to the MySQL server at: ".$mysqlServer);
		} else {
			mysql_select_db($db);
		}
		return $link;
	}

	function closeDB($link) {
		mysql_close($link);
	}

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