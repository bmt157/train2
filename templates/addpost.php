<!DOCTYPE html>
<html>
<head>
	<title>New Post</title>
</head>
<body>
	<form action="?action=doadd"  method="POST">
			<h2>Add New Post</h2>
		<div>
			<h3>Title</h3>
	      <input type="text" name="title" size="50"><br>
	   </div>
		<div>
	    	<h3>Description</h3>
	    	<textarea name="description" cols="54" rows="10"></textarea><br>
	  	</div>
			<h3>Image</h3>
	  	<div>
	    	<input type="file" name="image" id="image">
	    	<br><img src="https://www.dungplus.com/wp-content/uploads/2019/12/girl-xinh-600x600.jpg" width="100" height="100">
	  	</div>
	  	<div>
	  		<br>
			<label>Status</label>
			<select name="status">
			  <option value="0">Enable</option>
			  <option value="1">Disable</option>
			</select>
		</div>

		<br><div><button type="submit" class="btn btn-default">Submit</button></div>
	</form>
	
</body>
</html>