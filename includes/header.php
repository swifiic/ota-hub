<?php
	require_once './includes/functions.php';
	session_start();
	ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SWiFiIC</title>
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/bootstrap-theme.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/custom.css">
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
</head>
<body>
	<div class="container">
		<header>
			<h1>SWiFiIC <small>Sustainable Wi-Fi in Indian Context</small></h1>
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<a class="navbar-brand">SUTA Terminal</a>
				</div>
				<div class="navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="./dashboard.php">Dashboard</a></li>
						<li><?php echo isset($_SESSION['logged_in'])? "<a href=\"./logout.php\">Log Out</a>": "<a href=\"./login.php\">Log In</a>" ; ?></li>
					</ul>
				</div>
			</nav>
		</header>
