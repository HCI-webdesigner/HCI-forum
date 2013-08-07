<?php
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT",dirname(dirname(__FILE__)));
	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");

	$conn = new DataAccess("hciForum");
	$postFBSQL = "SELECT comment.* FROM comment,feedback WHERE feedback.comment_id=comment.id";
	$commentId = array();
	$commentContent = array();
	$fbContent = array();
	$fbDate = array();
	$commentUser = array();
	$feedbackSQL = "SELECT * FROM `feedback` WHERE post_id='0'";
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
	while($commentRows=mysql_fetch_array($postQuery)) {
		array_push($commentContent, $commentRows['content']);
		$userSQL = "SELECT account FROM `user` WHERE id='$commentRows[user_id]'";
		$userResult = mysql_fetch_array(mysql_query($userSQL));
		array_push($commentUser, $userResult[0]);
		array_push($commentId, $commentRows['id']);
	}
	include_once(ROOT . DS . "View" . DS . "verifyCommentView.php");
?>
<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>