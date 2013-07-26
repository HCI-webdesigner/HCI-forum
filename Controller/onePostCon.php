<?php
	session_start();
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT",dirname(dirname(__FILE__)));
	require_once(ROOT . DS . "View" . DS. "postHeader.php");
	include_once(ROOT . DS . "Model" . DS. "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$postId = $_GET['postId'];
	$sql = "SELECT * FROM `post` WHERE id='$postId'";
	$query = mysql_query($sql);
	while($post_rows = mysql_fetch_array($query)) {
		$user = mysql_fetch_array(mysql_query("SELECT account FROM `user` WHERE id='$post_rows[user_id]'"));
		$post_user = $user[0];
		$post_title = $post_rows['title'];
		$post_content = $post_rows['content'];
		$post_date = $post_rows['post_date'];
		$post_type = $post_rows['type'];
		$post_point = $post_rows['point'];
	}
	$comment_sql = "SELECT * FROM `comment` WHERE post_id='$postId'";
	$comment_query = mysql_query($comment_sql);
	$commentContent = array();
	$commentUser = array();
	$commentDate = array();
	$commentPoint = array();
	$commentId = array();
	while($comment_rows = mysql_fetch_array($comment_query)) {
		array_push($commentContent, $comment_rows['content']);
		$comment_user = mysql_fetch_array(mysql_query("SELECT account FROM `user` WHERE id='$comment_rows[user_id]'"));
		array_push($commentUser, $comment_user[0]);
		array_push($commentDate, $comment_rows['comment_date']);
		array_push($commentPoint, $comment_rows['cpoint']);
		array_push($commentId, $comment_rows['id']);
	}
	include_once(ROOT . DS . "View" . DS . "onePostView.php");
	if($post_type == 2) {
		include_once(ROOT . DS . "View" . DS . "debateFooter.html");
	}
	else {
		include_once(ROOT . DS . "View" . DS . "postFooter.html");
	}
?>