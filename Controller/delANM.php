<?php
	define("DS", DIRECTORY_SEPARATOR);
	define("ROOT", dirname(dirname(__FILE__)));

	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$id = $_GET['id'];
	$delANMSQL = "DELETE FROM `announcement` WHERE id='$id'";
	if(mysql_query($delANMSQL)) {
		echo "1";
	}
	else {
		echo "0";
	}
?>