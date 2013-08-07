<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>
<?php
	define("DS", DIRECTORY_SEPARATOR);
	define("ROOT", dirname(dirname(__FILE__)));

	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$postId = $_GET['id'];
	$sql = "SELECT * FROM `post` WHERE id='$postId'";
	$query = mysql_query($sql);
	$postTitle = array();
	$postContent = array();
	$postType = array();
	$postDate = array();
	$postUser = array();
	while($onePost=mysql_fetch_array($query)) {
		$temp_id = $onePost['user_id'];
		$userSql = "SELECT account FROM `user` WHERE id='$temp_id'";
		$temp_user = mysql_fetch_array(mysql_query($userSql));
		array_push($postUser, $temp_user[0]);
		array_push($postTitle, $onePost['title']);
		array_push($postType, $onePost['type']);
		array_push($postContent, $onePost['content']);
		array_push($postDate, $onePost['post_date']);
	}

	foreach ($postTitle as $key => $title) {
?>
	<h2><?php echo $title;?></h2>
	<h3><?php echo $postContent[$key];?></h3>
	<h4><?php echo $postUser[$key];?></h4>
	<h4><?php echo $postType[$key];?></h4>
	<h4><?php echo $postDate[$key];?></h4>
<?php
	}
?>
	<a href="/HCI-forum/Controller/setTop.php">置顶</a>
	<a href="/HCI-forum/Controller/marrowbone.php">精华</a>
	<a href="/HCI-forum/Controller/lock.php">锁定</a>
	<a href="/HCI-forum/Controller/del.php">删除帖子</a>
	<a href="">锁定帖子</a>
	<a href="">移动帖子</a><br>