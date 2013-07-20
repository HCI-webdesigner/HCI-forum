<?php
	define("DS", DIRECTORY_SEPARATOR);
	define("ROOT",dirname(dirname(__FILE__)));

	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$postId = $_GET['postId'];
	$sql = "SELECT * FROM `post` WHERE id='$postId'";
	$query = mysql_query($sql);
	$postMsg = mysql_fetch_array($query);

	$postTitle = $postMsg['title'];
	$postContent = $postMsg['content'];
	$postType = $postMsg['type'];
	$postDate = $postMsg['post_date'];
	$postPoint = $postMsg['point'];
	$postState = $post
?>