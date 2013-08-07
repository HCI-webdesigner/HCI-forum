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
	$postDate = date('Y-m-d H:i:s');
	$state = 0;
	$boardId = $_POST['boardId'];
	$areaId = $_POST['areaId'];
	$userId = $_POST['usrId'];

	$sql = "INSERT INTO `post`(`title`, `content`, `type`, `point`, `deleted`, `post_date`, `state`, `board_id`, `user_id`) 
	VALUES ('$title','$content','$type','$point','$deleted','$postDate','$state','$boardId','$userId')";
	mysql_query($sql);
	$getPost = "SELECT id FROM `post` WHERE title='$title'";
	$result = mysql_query($getPost);
	$resultArr = mysql_fetch_array($result);
	$postId = $resultArr['id'];

	if($type == 2) {
		$debateSQL = "INSERT INTO `debate` (`content`,`side`,`date`,`post_id`,`user_id`)
		values('$content', '1', '$postDate', '$postId', '$userId')";
		mysql_query($debateSQL);
	}
	else {
	}

	$sql2 = "SELECT post.* FROM post,board WHERE
			post.board_id=board.id AND board.area_id='$areaId'";
	$result2 = mysql_query($sql2);
	$postCount = mysql_num_rows($result2);
	$sql3 = "UPDATE `area` SET count = '$postCount' WHERE id='$areaId'";
	mysql_query($sql3);
	

	echo '<script language=javascript>location="/HCI-forum/Controller/onePostCon.php?postId='.$postId.'"</script>';
?>