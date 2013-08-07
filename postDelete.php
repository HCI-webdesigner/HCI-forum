<?php
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT",dirname(__FILE__));

	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$postId=$_GET['id'];
	$sql1="SELECT user.authority FROM user,post WHERE post.id='$postId' AND post.user_id=user.id";
	$result1=mysql_query($sql1);
	$list1=mysql_fetch_array($result1);
	if($list1['authority']==2||$list1['authority']==3){
		$sql2="UPDATE `post` SET deleted=1 WHERE id='$postId'";
		if(mysql_query($sql2)){
			echo "1";
		}
		else{
			echo "0";
		}
	}
?>