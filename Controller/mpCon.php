<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>
<?php
	define("DS", DIRECTORY_SEPARATOR);
	define("ROOT", dirname(dirname(__FILE__)));

	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$areaId = $_GET['area'];
	$sql = "SELECT post.* FROM post,board WHERE post.authority='0' AND post.state='0' AND board.area_id='$areaId'";
	$query = mysql_query($sql);
	$postTitle = array();
	$postContent = array();
	$postType = array();
	$postDate = array();
	$postId = array();
	$postUser = array();
	while($normal_rows=mysql_fetch_array($query)) {
		$temp_id = $normal_rows['user_id'];
		$userSql = "SELECT account FROM `user` WHERE id='$temp_id'";
		$temp_user = mysql_fetch_array(mysql_query($userSql));
		array_push($postUser, $temp_user[0]);
		array_push($postTitle, $normal_rows['title']);
		array_push($postType, $normal_rows['type']);
		array_push($postDate, $normal_rows['post_data']);
		array_push($postId, $normal_rows['id']);	
		echo $sql."<br>";
	}
	include_once(ROOT . DS . "View" . DS . "mpView.php");
?>