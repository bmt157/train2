<?php

	$action = $_REQUEST['action'];
	// echo $action;
	require_once('controllers/controller_post.php');
	$postController = new PostController();
	require_once('models/model_post.php');
	$postModel = new PostModel();
	$a = $postModel -> showall();
	$pages = $postModel -> countID();
	$countPage = $pages['COUNT(id)'] ;
	$limit = 5;
	$pagecoun = ceil($countPage / $limit);
	// echo $countPage;
		// for($i=1;$i<=$pagecoun;$i++){
		// 	if ($action='$i') {
		// 		$postController -> getPostID();
		// 	}
			if($action=='1' or $action=='2' or $action=='3'  or $action=='4' or $action=='5' or $action=='6' ){
				$postController -> getPostID();
			}
			if($action=='menu'){

				$postController -> getPost();
			}
	
			if($action=='new'){
				$postController -> new();
			}

			if($action=='doadd'){
				$postController -> appNew();
			}
			if ($action=='doedit') {
				$postController -> editNew();
			}
			else {
				foreach ($a as $post) :
					$b = $post['id'];
		// echo $b;

					if($action=='showid='.$b){
				// echo $b;
				
				
				// $postModel -> show($b);
						$postController -> Showone($b);
					}

					if($action=='editid='.$b){
						$postController -> Edit($b);
					}

					if($action=='deleteid='.$b){
						$postController -> Delete($b);
					}
				endforeach;
			}
	// }
	
	

	
?>

