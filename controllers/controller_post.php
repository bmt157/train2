<?php
	class PostController {
		public function getPost(){
			require_once('models/model_post.php');
			$model_post = new PostModel();
			$posts = $model_post->getPost();
			require_once('views/post_view.php');
			$post_view = new PostView();
			$post_view->ShowAll($posts);
		}

		public function getPostID(){
			require_once('models/model_post.php');
			$model_post = new PostModel();
			$posts = $model_post->getPostID();
			require_once('views/post_view.php');
			$post_view = new PostView();
			$post_view->ShowAll($posts);
		}
		public function Showone($b){
			// echo $b;
			require_once('models/model_post.php');
			$model_post = new PostModel();
			$posts = $model_post->showone($b);
			require_once('views/post_view.php');
			$post_view = new PostView();
			$post_view->ShowList($posts);
		}

		public function Edit($b){
			require_once('models/model_post.php');
			$model_post = new PostModel();
			$posts = $model_post->edit($b);
			require_once('views/post_view.php');
			$post_view = new PostView();
			$post_view->EditRow($posts);
		}
		public function editNew(){
			$title			= $_POST['title'];
			$description	= $_POST['description'];
			$image			= $_POST['image'];
			$status			= $_POST['status'];
			$id				= $_POST['id'];

			$post = array(
				'title'			=> $title,
				'description'	=> $description,
				'image'			=> $image,
				'status'		=> $status,
				'id'			=> $id
			);

			// print_r($post);

			require_once('models/model_post.php');
			$model_post = new PostModel();
			$posts = $model_post->editnew($post);
		}
		

		public function Delete($b){
			require_once('models/model_post.php');
			$model_post = new PostModel();
			$posts = $model_post->delete($b);
			require_once('views/post_view.php');
			$post_view = new PostView();
			$post_view->DeleteRow($posts);
		}

		public function New(){
			// require_once('models/model_post.php');
			// $model_post = new PostModel();
			// $posts = $model_post->new();
			require_once('views/post_view.php');
			$post_view = new PostView();
			$post_view->NewRow();
		}
		public function appNew(){
			$title			= $_POST['title'];
			$description	= $_POST['description'];
			$image			= $_POST['image'];
			$status			= $_POST['status'];

			$post = array(
				'title'			=> $title,
				'description'	=> $description,
				'image'			=> $image,
				'status'		=> $status,
			);

			// print_r($post);

			require_once('models/model_post.php');
			$model_post = new PostModel();
			$posts = $model_post->new($post);
		}


	}
	
?>