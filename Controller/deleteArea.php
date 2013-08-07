<?php
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT",dirname(dirname(__FILE__)));

	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$areaId = $_GET['id'];
	$deleteSQL = "UPDATE `area` SET deleted='1' WHERE id='$areaId'";
	if(mysql_query($deleteSQL)) {
		echo "1";
	}
	else {
		echo "0";
	}
?>