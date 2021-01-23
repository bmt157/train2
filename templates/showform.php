<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div>
		<p class="text-right" style="width: 100%">
	      	<a class="nav-link" href="http://localhost:8080/bmtblogmvc/?action=menu"><font size="+2">Back</font></a>
	    </p>
	</div>
		<?php foreach ($posts as $post) : ?>
			<img src="<?php echo $post['image'] ?>" width="150" height="150">
			<h4>Description:</h4>
			<br><td><h5><?php echo $post['description'] ?></h5></td>
		<?php endforeach ?>

	
</body>
</html>