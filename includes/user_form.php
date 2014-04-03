<form action="<?php echo isset($_GET['userID'])? "./edit_user.php": "./add_user.php"; ?>" method="POST">
	<?php 
		if(isset($_GET['userID'])) {
			$values = getValuesForUser($_GET['userID']);
		}
	?>
	<div class="form-group">
		<label for="alias">Alias</label>
		<input type="text" id="alias" class="form-control" name="alias" value="<?php echo "{$values['alias']}"; ?>" placeholder="Alias" required/>
	</div>
	<div class="form-group">
		<label for="username">Username</label>
		<input type="text" id="username" class="form-control" name="username" value="<?php echo "{$values['username']}"; ?>" placeholder="User Name" required/>
	</div>
	<div class="form-group">
		<label for="dtnID">DTN ID</label>
		<input type="textarea" id="dtnID" class="form-control" name="dtnID" value="<?php echo "{$values['dtn_id']}"; ?>" placeholder="DTN ID" required/>
	</div>
	<input type="hidden" name="userID" value="<?php echo "{$values['id']}"; ?>"/>
	<input type="submit" class="btn btn-default" name="<?php echo isset($_GET['userID'])? "editUser": "addUser"; ?>" value="Submit">
</form>