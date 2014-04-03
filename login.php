<?php include './includes/header.php'; ?>
	<?php
		if(isset($_POST['login'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$query = "SELECT password FROM Operators WHERE username='{$username}' LIMIT 1";
			$link = connectToDB();
			$result = mysql_fetch_array((mysql_query($query, $link)));
			if($result["password"]==$password) {
				$_SESSION['logged_in'] = 1;
				header("location:./dashboard.php");
			} else {
				$erroMessage = "Invalide username or password!";
			}

		}
	?>
	<div>
		<h3>Welcome to SWiFiIC Operator Terminal</h3>
		<hr>
		<h4>Enter your login credentials:</h4>
		<form class="form-horizontal" role="form" name="login_form" action="login.php" method="POST">
			<?php
				if(isset($_GET['logout'])) {
					echo "<p class=\"text-success\" >You have been successfully logged out!</p>";
				} elseif(isset($erroMessage)) {
					echo "<p class=\"text-danger\">{$erroMessage}</p>";
				}
			?>
			<div class="form-group">
				<div class="col-sm-4">
					<input type="text" class="form-control" id="username" name="username" placeholder="Username" autofocus required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
				</div>
			</div>
			<input type="submit" class="btn btn-default" name="login" value="Log In" />
		</form>
	</div>
<?php include './includes/footer.php'; ?>