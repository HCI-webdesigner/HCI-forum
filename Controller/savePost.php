<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
</html>
<?php
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT",dirname(dirname(__FILE__)));
	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$conn = new DataAccess("hciForum");

	$title = $_POST['title'];
	$content = $_POST['content'];
	$type = $_POST['type'];
	$point = $_POST['point'];
	$deleted = 0;
	$postDate = date('Y-m-d');
	$state = 0;
	$boardId = $_POST['boardId'];
	$userId = $_POST['usrId'];

	$sql = "INSERT INTO `post`(`title`, `content`, `type`, `point`, `deleted`, `post_date`, `state`, `board_id`, `user_id`) 
	VALUES ('$title','$content','$type','$point','$deleted','$postDate','$state','$boardId','$userId')";
	mysql_query($sql);

	echo "<script language=javascript>location='/HCI-forum/';</script>"
?>