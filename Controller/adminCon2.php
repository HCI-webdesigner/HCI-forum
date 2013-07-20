<?php
	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");

	$conn = new DataAccess("hciForum");
	$sql = "SELECT * FROM `area`";
	$query = mysql_query($sql);
	$areaName = array();
	$areaIcon = array();
	$areaId = array();
	while($area_rows = mysql_fetch_array($query)) {
		array_push($areaName, $area_rows['name']);
		array_push($areaIcon, $area_rows['icon_url']);
		array_push($areaId, $area_rows['id']);
	}
	include_once(ROOT . DS . "View" . DS . "adminAreaView.php");
?>