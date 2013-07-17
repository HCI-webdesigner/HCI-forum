<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php
	include_once('/var/www/HCI-forum/Model/DataAccess.php');
	$usr = $_POST["usr"];
	$pwd = $_POST["pwd"];
	$pwd = md5($pwd);
	$conn = new DataAccess("localhost","root","root","hciForum");
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
		$_SESSION = array();
		$_SESSION['usr'] = $usr;
		$_SESSION['score'] = $score;
		$_SESSION['level'] = $level;
		$_SESSION['auth'] = $auth;
	}
	else{
		
	}
?>