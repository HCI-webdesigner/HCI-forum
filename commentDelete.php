<?php
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT",dirname(__FILE__));

	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$commentId=$_GET['id'];
	$sql1="SELECT user.authority FROM user,comment WHERE comment.id='$commentId' AND comment.user_id=user.id";
	$result1=mysql_query($sql1);
	$list1=mysql_fetch_array($result1);
	if($list1['authority']==2||$list1['authority']==3){
		$sql2="UPDATE `comment` SET deleted=1 WHERE id='$commentId'";
		if(mysql_query($sql2)){
			echo "1";
		}
		else{
			echo "0";
		}
	}
?>