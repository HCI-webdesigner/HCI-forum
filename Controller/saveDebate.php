<?php
	session_start();
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT",dirname(dirname(__FILE__)));
	require_once(ROOT . DS . "View" . DS. "postHeader.php");
	include_once(ROOT . DS . "Model" . DS. "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$date = date("Y-m-d H:i:s");
	if($_POST['sub']) {
		$postId = $_POST['postId'];
		$debateContent = $_POST['content'];
		$saveSQL = "INSERT INTO `debate` (content, side, `date`, post_id, user_id)
		values('$debateContent','$_SESSION[side]', '$date','$postId','$_SESSION[id]')";
		if(mysql_query($saveSQL)) {
			echo "<script language=javascript>alert('添加成功');
			location='/HCI-forum/Controller/onePostCon.php?postId=$postId';</script>";
		}
	}
?>