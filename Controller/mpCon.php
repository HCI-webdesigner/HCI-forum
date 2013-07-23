<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>
<?php
	define("DS", DIRECTORY_SEPARATOR);
	define("ROOT", dirname(dirname(__FILE__)));

	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$areaId = $_GET['area'];
	$sql = "SELECT post.* FROM post,board WHERE
		post.authority='0' AND post.state='0' AND post.board_id=board.id AND board.area_id='$areaId'";
	$query = mysql_query($sql);
	$postId = array();
	$postTitle = array();
	while($normal_rows=mysql_fetch_array($query)) {
		array_push($postId, $normal_rows['id']);
		array_push($postTitle, $normal_rows['title']);
	}
	include_once(ROOT . DS . "View" . DS . "mpView.php");
?>