<?php
	include_once('/var/www/HCI-forum/Model/DataAccess.php');
	$conn = new DataAccess("hciForum");
	$postId = $_GET['postId'];
	$sql = "SELECT * FROM `post` WHERE id='$postId'";
	$query = mysql_query($sql);
	while($post_rows = mysql_fetch_array($query)) {
		$post_title = $post_rows['title'];
		$post_content = $post_rows['content'];
	}
	include_once('/var/www/HCI-forum/View/onePostView.php');
?>
<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>