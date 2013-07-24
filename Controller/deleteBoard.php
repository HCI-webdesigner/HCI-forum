<?php
	define("DS", DIRECTORY_SEPARATOR);
	define("ROOT", dirname(dirname(__FILE__)));

	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$boardId = $_GET['id'];
	$delSQL = "DELETE FROM `board` WHERE `id` = '$boardId'";
	if(mysql_query($delSQL)) {
		echo "1";
	}
	else {
		echo "0";
	}
?>