<?php
	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$postUser = array();
	$postTitle = array();
	$postContent = array();
	$postType = array();
	$postDate = array();
	$postId = array();
	$areaId = $_GET['area'];
	$boardId = $_GET['board'];
	if($boardId == 0) {
		$sql = "SELECT post.* FROM post,board WHERE
				post.board_id=board.id AND board.area_id='$areaId' order by id desc";
		$query = mysql_query($sql);
		while($allPost=mysql_fetch_array($query)) {
			array_push($postTitle, $allPost['title']);
			array_push($postContent, $allPost['content']);
			array_push($postType, $allPost['type']);
			array_push($postDate, $allPost['post_date']);	
			array_push($postId, $allPost['id']);
			$temp_user = mysql_fetch_array(mysql_query("SELECT account from user WHERE id='$allPost[user_id]'"));
			array_push($postUser, $temp_user[0]);
		}
	}
	else {
		$sql = "SELECT * from post WHERE board_id='$boardId'";
		$query = mysql_query($sql);
		while($allPost=mysql_fetch_array($query)) {
			array_push($postTitle, $allPost['title']);
			array_push($postContent, $allPost['content']);
			array_push($postType, $allPost['type']);
			array_push($postDate, $allPost['post_date']);
			array_push($postId, $allPost['id']);	
			$temp_user = mysql_fetch_array(mysql_query("SELECT account from user WHERE id='$allPost[user_id]'"));
			array_push($postUser, $temp_user[0]);
		}
	}
	include_once(ROOT . DS . "View" . DS . "allPostView.php");
?>