<?php
	
	// define("DS",DIRECTORY_SEPARATOR);
	// define("ROOT",dirname(__FILE__));
	// include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	include_once("/var/www/HCI-forum/Model/DataAccess.php");
	$conn = new DataAccess("hciForum");

	$sql1 = "SELECT * FROM area";
	$result1 = mysql_query($sql1);
	$areaNum = 0;
	while ($arr1 = mysql_fetch_array($result1)) {
		$areaNum++;
	}

	$sql2 = "SELECT * FROM board";
	$result2 = mysql_query($sql2);
	$boardNum = 0;
	while ($arr2 = mysql_fetch_array($result2)) {
		$boardNum++;
	}

	$sql3 = "SELECT * FROM post";
	$result3 = mysql_query($sql3);
	$postNum = 0;
	while ($arr3 = mysql_fetch_array($result3)) {
		$postNum++;
	}

	$sql4 = "SELECT * FROM user";
	$result4 = mysql_query($sql4);
	$usrNum = 0;
	while ($arr4 = mysql_fetch_array($result4)) {
		$usrNum++;
	}

	$arr = array('area'=>$areaNum,'board'=>$boardNum,'post'=>$postNum,'usr'=>$usrNum);
	echo json_encode($arr);

?>