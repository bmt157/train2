<?php
/**
 * 
 */
class PostModel
{
	public function connect() {
		$con = mysqli_connect('localhost','root','','bmt_blogcvm');
		mysqli_set_charset($con,'utf8');

		if(mysqli_connect_errno()){
			echo 'Connect Error: ' .mysqli_connect_error();

		}
		return $con;
	}
	public function getPost() {
		$con = $this->connect();
		$limit = 5;
		$pagenow = 1;
		$from = ($pagenow - 1)*$limit;
		// $from = 3;
		$result = $con->query("SELECT * FROM mvc_post LIMIT $from,$limit");
		$posts = array();
		if ($result -> num_rows > 0) {
		 	while ($post = mysqli_fetch_assoc($result)) {
		 		$posts[] = $post;
		 	}
		}
		return $posts;
	}


	public function getPostID() {
		$con = $this->connect();
		$limit = 5;
		$result1 = $con->query('SELECT COUNT(id) FROM mvc_post');
		$post1 = mysqli_fetch_assoc($result1);
		$page = $post1['COUNT(id)'];
		// echo $page;
		$pages = ceil($page / $limit);
		// echo $pages;
		$pagenow = (int)$_GET['action'];
		// print_r($pagenow);
		$from = ($pagenow - 1)*$limit;
		// $from = 3;
		$result = $con->query("SELECT * FROM mvc_post LIMIT $from,$limit");
		$posts = array();
		if ($result -> num_rows > 0) {
		 	while ($post = mysqli_fetch_assoc($result)) {
		 		$posts[] = $post;
		 	}
		}

		return $posts;
	}
	public function countID(){
		$con = $this->connect();
		$result = $con->query('SELECT COUNT(id) FROM mvc_post');
		$post = mysqli_fetch_assoc($result);
		// print_r($post);
		return $post;

	}

	public function new($post){
		$con = $this->connect();

		$time = date('m/d/Y h:i:s a');

		$sql = "INSERT INTO `mvc_post` (`title`, `description`, `image`, `status`, `create_at`, `update_at`, `id`) VALUES ('". $post['title'] ."', '". $post['description'] ."', '". 'image/' .$post['image'] ."', '". $post['status'] ."', '". $time ."', '". $time ."', NULL);";
		// echo $sql;
		$rs = $con->query($sql);
		if($rs){
			echo "Success";
		}
		else{
			echo "fail";
			}


		}

	public function editnew($post){
		$con = $this->connect();
		$emp_id = $post['id'];
		$emp_title = $post['title'];
		$emp_description = $post['description'];
		$emp_image = 'image/'.$post['image'];
		$emp_status = $post['status'];
		$sql = "UPDATE `mvc_post` SET `title` = '$emp_title', `description` = '$emp_description', `image` = '$emp_image', `status` = '$emp_status' WHERE `mvc_post`.`id` = $emp_id";
		$rs = $con->query($sql);
		if($rs){
			echo "Success";
		}
		else{
			echo "fail";
			}
	}

	public function showone($b){
		$con = $this->connect();
		$result = $con->query('SELECT * FROM mvc_post WHERE id='.$b);
		$posts = array();
		if ($result -> num_rows > 0) {
		 	while ($post = mysqli_fetch_assoc($result)) {
		 		$posts[] = $post;
		 	}
		 }
		return $posts;
	}

	public function showall(){
		$con = $this->connect();
		$result = $con->query('SELECT * FROM mvc_post');
		$posts = array();
		if ($result -> num_rows > 0) {
		 	while ($post = mysqli_fetch_assoc($result)) {
		 		$posts[] = $post;
		 	}
		 }
		return $posts;
	}

	public function edit($b){
		$con = $this->connect();
		$result = $con->query('SELECT * FROM mvc_post WHERE id='.$b);
		$posts = array();
		if ($result -> num_rows > 0) {
		 	while ($post = mysqli_fetch_assoc($result)) {
		 		$posts[] = $post;
		 	}
		 }
		return $posts;
	}

	public function delete($b){
		$conn = $this->connect();
		$conn->query('DELETE FROM mvc_post WHERE id ='.$b);
		// if ($conn->query($sql) === TRUE) {
  // 			echo "Record deleted successfully";
  // 		} 		
  // 		else {
  // 			echo "Error deleting record: " . $conn->error;
		// }
	}



}




?>