<?php
	include_once('/var/www/HCI-forum/Model/DataAccess.php');
	$usr = $_GET["usr"];
	$pwd = $_GET["pwd"];
	$pwd = md5($pwd);
	$conn = new DataAccess("localhost","root","zsl0917zsl","hciForum");
	$sql = "SELECT password FROM `user` WHERE account='".$usr."' AND password='".$pwd."'";
	$result = mysql_query($sql);
	$match = mysql_num_rows($result);
	if($match){
		$sendBack = array('correct' => 'yes','usr'=>$usr );
		session_start();
		setcookie("usrName", $usr);
	}
	else{
		$sendBack = array('correct' => 'no','usr'=>'' );
	}
	echo json_encode($sendBack);

?>