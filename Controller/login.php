<?php
	session_start();
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT",dirname(dirname(__FILE__)));
	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$usr = $_POST["usr"];
	$pwd = $_POST["pwd"];
	$pwd = md5($pwd);
	$conn = new DataAccess("hciForum");
	$sql1 = "SELECT password FROM `user` WHERE account='$usr' AND password='$pwd'";
	$result1 = mysql_query($sql1);
	$match = mysql_num_rows($result1);
	if($match){
		$sql2 = "SELECT * FROM `user` WHERE account='$usr'";
		$result2 = mysql_query($sql2);
		$info = mysql_fetch_array($result2);
		$score = $info['score'];
		$level = $info['level'];
		$auth = $info['authority'];
		$_SESSION['usr'] = $usr;
		$_SESSION['score'] = $score;
		$_SESSION['level'] = $level;
		$_SESSION['auth'] = $auth;
		$_SESSION['state'] = true;
		if(!$auth) {
			echo "<script language=javascript>location='/HCI-forum/';</script>";
		}
		else {
			echo "<script language=javascript>location='/HCI-forum/View/admin.php';</script>";
		}
	}
	else{
		echo "<script language=javascript>alert('帐号或密码错误');location='/HCI-forum'</script>";
	}
?>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">