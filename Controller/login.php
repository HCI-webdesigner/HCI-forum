<?php
	include_once('/var/www/HCI-forum/Model/DataAccess.php');
	$usr = $_GET["usr"];
	$pwd = $_GET["pwd"];
	$pwd = md5($pwd);
	$conn = new DataAccess("localhost","root","zsl0917zsl","hciForum");
	$sql1 = "SELECT password FROM `user` WHERE account='".$usr."' AND password='".$pwd."'";
	$result1 = mysql_query($sql1);
	$match = mysql_num_rows($result1);
	if($match){
		$sql2 = "SELECT * FROM `user` WHERE account='".$usr."'";
		$result2 = mysql_query($sql2);
		$info = mysql_fetch_array($result2);
		$score = $info['score'];
		$level = $info['level'];
		$auth = $info['authority'];
		session_start();
		$_SESSION['usr'] = $usr;
		$_SESSION['score'] = $score;
		$_SESSION['level'] = $level;
		$_SESSION['auth'] = $auth;
		//setcookie("usr", $usr);
		$sendBack = array('correct' => 'yes','usr'=>$usr );
	}
	else{
		$sendBack = array('correct' => 'no','usr'=>'' );
	}
	echo json_encode($sendBack);

?>