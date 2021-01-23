<!DOCTYPE html>
<html>
<head>
	<title>New Post</title>
</head>
<body>
	<?php foreach ($posts as $post) : ?>
		<form action="?action=doedit"  method="POST">
				<h2>Edit Post</h2>
			<div>
				<h3>Title</h3>
		      <input type="text" name="title" size="50" value="<?php echo $post['title'] ?>"><br>
		   </div>
			<div>
		    	<h3>Description</h3>
		    	<textarea name="description" cols="54" rows="10"><?php echo $post['description'] ?></textarea><br>
		  	</div>
				<h3>Image</h3>
		  	<div>
		    	<input type="file" name="image" value="<?php echo $post['image'] ?>">
		    	<br><img src="<?php echo $post['image'] ?>" width="100" height="100">
		  	</div>
		  	<div>
		  		<br>
				<label>Status</label>
				<select name="status">
				  <option value="0"<?php if ($post['status']='0') {
				  	echo "selected";
				  } ?>>Enable</option>
				  <option value="1"<?php if ($post['status']='1') {
				  	echo "selected";
				  } ?>>Disable</option>
				</select>

			</div>

			<br><div><button type="submit" class="btn btn-default">Submit</button></div><br>
			id <input type="text" name="id" value="<?php echo $post['id'] ?>">
		</form>
	<?php endforeach ?>
</body>
</html>