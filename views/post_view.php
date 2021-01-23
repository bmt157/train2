<?php
	/**
	 *  
	 */
	class PostView
	{
		
		public function ShowAll($posts)
		{
			require_once('templates/posts.php');

		}

		public function ShowList($posts){
			require_once('templates/showform.php');
			

		}

		public function EditRow($posts){
			require_once('templates/editform.php');
		}

		public function DeleteRow($posts){
			require_once('templates/delete.php');
		}

		public function NewRow(){
			require_once('templates/addpost.php');
		}
	}

?>