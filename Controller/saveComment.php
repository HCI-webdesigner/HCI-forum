<?php
	
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT",dirname(dirname(__FILE__)));
	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$conn = new DataAccess("hciForum");

	$content = $_POST['content'];
	$date = date("Y-m-d H:i:s");
	$deleted = 0;
	$postId = $_POST['postId'];
	$usrId = $_POST['usrId'];

	$sql = "INSERT INTO `comment`(`content`, `comment_date`, `deleted`,  `post_id`, `user_id`) 
	VALUES ('$content','$date','$deleted','$postId','$usrId')";
	mysql_query($sql);

	echo '<script language=javascript>location="/HCI-forum/Controller/onePostCon.php?postId='.$postId.'"</script>';
?>