<?php
	define("DS", DIRECTORY_SEPARATOR);
	define("ROOT", dirname(dirname(__FILE__)));

	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$areaId = $_GET['id'];
	$postFBSQL = "SELECT post.* FROM post,feedback,board WHERE 
	post.id=feedback.post_id AND post.state='0' AND post.board_id=board.id AND post.deleted='0'";
	$commentFBSQL = "SELECT comment.* FROM comment,feedback WHERE comment.id=feedback.comment_id";

?>