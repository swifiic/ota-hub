<?php include './includes/header.php'; ?>
	<div>
		<h3>List of all the users</h3>
		<table class="table table-stripped table-hover">
			<tr>
				<th>S. No.</th>
				<th>Avatar</th>
				<th>Alias</th>
				<th>Username</th>
				<th>DTN ID</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php
				$serial = 1;
				$link = connectToDB();
				$query = "SELECT * FROM Users WHERE 1";
				$users = mysql_query($query, $link);

				while($user = mysql_fetch_array($users)) {
					echo "<tr>";
						echo "<td>{$serial}</td>";
						echo "<td><img src=image.php?userId={$user['id']} class=\"img-rounded small-thumbnail\" /></td>";
						echo "<td> {$user['alias']}</td>";
						echo "<td> {$user['username']}</td>";
						echo "<td> {$user['dtn_id']}</td>";
						echo "<td><a href=\"./edit_user.php?userID={$user['id']}\">Edit</a></td>";
						echo "<td><a href=\"./delete_user.php?userID={$user['id']}\">Delete</a></td>";
					echo "</tr>";
					$serial++;
				}

				closeDB($link);
			?>
		</table>
		<br>
		<hr>
		<a href="./add_user.php">Add a new user</a>
	</div>
<?php include './includes/footer.php'; ?>
