<?php 		require_once('models/model_post.php');
			$model_post = new PostModel();
			$pagenow = (int)$_GET['action'];
			$pages = $model_post -> countID();
			// print_r($pages);
			$pagecount = $pages['COUNT(id)'] ;
			$limit = 5;
			$countPage = ceil($pagecount / $limit);
			// echo $countPage;
?>
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
		<h3>Manage</h3>
		<ul class="nav flex-column flex-sm-row">
	   	<p class="text-right" style="width: 100%">
	      	<a class="nav-link" href="http://localhost:8080/bmtblogmvc/?action=new"><font size="+2">New</font></a>
	      </p>
	</div>
	
</ul>
			<table class="table table-bordered">
			   <thead>
			      <tr>
			      	
			         <th>ID</th>
			         <th>Thumb</th>
			         <th>Titel</th>
			         <th>Status</th>
			         <th>Action</th>
			      </tr>
			   </thead>
			   
			   	<div>
				   <tbody>
				   	<?php foreach ($posts as $post) : ?>
				      <tr>
				      	
				         <td><?php echo $post['id'];?></td> 
				         <td><img src="<?php echo $post['image'] ?>" width="100" height="100"></td>
				         <td><?php echo $post['title']; ?></td>
				         <td><?php if ($post['status']==0){
				         	echo 'Enable';}
				         	else{echo 'Disable';} ?></td>
				      	
				         <td>
				         	<div class="row">
								<a class="nav-link col-lg-4" href="http://localhost:8080/bmtblogmvc/?action=showid=<?php echo $post['id'] ?>">Show</a>
								<a class="nav-link col-lg-4" href="http://localhost:8080/bmtblogmvc/?action=editid=<?php echo $post['id'] ?>">Edit</a>
								<a class="nav-link col-lg-4" href="http://localhost:8080/bmtblogmvc/?action=deleteid=<?php echo $post['id'] ?>">Delete</a>
							</div>
						</td>
						
						
				      </tr>

				      <?php endforeach ?>
			   		</tbody>
			   	</div>
			   
						
		</table>

		<nav aria-label="Page navigation example">
 	 	<ul class="pagination justify-content-center">
 	 	
	    	<li class="page-item">

	      	<a class="page-link" href="http://localhost:8080/bmtblogmvc/?action=<?php echo $pagenow-1 ?>">Previous</a>
	    	</li>
	    	<?php for ($i=1; $i <= $countPage ; $i++) : ?>
	    	
			    <li class="page-item"><a class="page-link" href="http://localhost:8080/bmtblogmvc/?action=<?php echo $i ?>"><?php echo $i; ?></a></li>
			    <li class="page-item">
			    
			<?php endfor; ?>

			     <a class="page-link" href="http://localhost:8080/bmtblogmvc/?action=<?php echo $pagenow+1 ?>">Next</a>
	    	</li>
    	
  </ul>
</nav>
</body>
</html>