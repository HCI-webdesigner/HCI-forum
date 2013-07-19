<?php
	include_once('/var/www/HCI-forum/Model/DataAccess.php');
	include_once('/var/www/HCI-forum/Model/area.php');
	$conn = new DataAccess("hciForum");

	$sql="SELECT * FROM `area`";
	$query=mysql_query($sql);
	$result_num = mysql_num_rows($query);
	$areaName = array();
	$areaCount = array();
	$areaImgUrl = array();
	while($areaList = mysql_fetch_array($query)) {
		array_push($areaName, $areaList['name']);
		array_push($areaCount, $areaList['count']);
		array_push($areaImgUrl, $areaList['icon_url']);
	}
	include_once('/var/www/HCI-forum/View/areaView.php');
?>