<?php
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT",dirname(dirname(__FILE__)));
	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");

	$conn = new DataAccess("hciForum");
	$postFBSQL = "SELECT post.* FROM post,feedback WHERE feedback.post_id=post.id";
	$postId = array();
	$postTitle = array();
	$postContent = array();
	$fbContent = array();
	$fbDate = array();
	$postUser = array();
	$feedbackSQL = "SELECT * FROM `feedback` WHERE comment_id='0'";
	$fbQuery = mysql_query($feedbackSQL);
	$feedbackUser = array();
	while($feedbackRows=mysql_fetch_array($fbQuery)) {
		$uSQL = "SELECT account FROM `user` WHERE id='$feedbackRows[user_id]'";
		$uResult = mysql_fetch_array(mysql_query($uSQL));
		array_push($fbContent, $feedbackRows['content']);
		array_push($fbDate, $feedbackRows['fb_date']);
		array_push($feedbackUser, $uResult[0]);
	}
	$postQuery = mysql_query($postFBSQL);
	while($postRows=mysql_fetch_array($postQuery)) {
		array_push($postTitle, $postRows['title']);
		array_push($postContent, $postRows['content']);
		$userSQL = "SELECT account FROM `user` WHERE id='$postRows[user_id]'";
		$userResult = mysql_fetch_array(mysql_query($userSQL));
		array_push($postUser, $userResult[0]);
		array_push($postId, $postRows['id']);
	}
	include_once(ROOT . DS . "View" . DS . "verifyView.php");
?>
<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>