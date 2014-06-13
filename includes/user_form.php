<form action="<?php echo isset($_GET['userID'])? "./edit_user.php": "./add_user.php"; ?>" method="POST" enctype="multipart/form-data">
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
	<div class="form-group">
		<label for="profilePic">Profile Picture</label>
		<input type="file" id="profilePic" name="profilePic" onchange="showPreview(this);" accept="image/*" required/>
		<p class="help-block">Upload a profile picture, size 200x200 px, maximum filesize 50KB.</p>
		<img src="#" id="preview" title="Profile Picture Preview" class="img-thumbnail hidden">
	</div>
	<input type="hidden" name="userID" value="<?php echo "{$values['id']}"; ?>"/>
	<input type="submit" class="btn btn-default" name="<?php echo isset($_GET['userID'])? "editUser": "addUser"; ?>" value="Submit">
	<script type="text/javascript">
	function showPreview(input) {
	    if (input.files && input.files[0]) {
	    	var filesize = input.files[0].size/1024;
	    	if (filesize > 50) {
	    		alert("Maximum file size limit exceeded. File size: " + filesize + "KB");
	    		input.value="";
	    	}
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#preview').attr('src', e.target.result).attr('class', 'img-thumbnail');
	   		}
			reader.readAsDataURL(input.files[0]);
		}
	}
	</script>
</form>
