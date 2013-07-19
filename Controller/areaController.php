<?php
	include_once('/var/www/HCI-forum/Model/DataAccess.php');
	include_once('/var/www/HCI-forum/Model/area.php');
	$conn = new DataAccess("hciForum");

	require_once('/var/www/HCI-forum/View/indexHeader.html');

	$sql="SELECT * FROM `area`";
	$query=mysql_query($sql);
	$result_num = mysql_num_rows($query);
	$areaId = array();
	$areaName = array();
	$areaCount = array();
	$areaIconUrl = array();
	while($areaList = mysql_fetch_array($query)) {
		array_push($areaId, $areaList['id']);
		array_push($areaName, $areaList['name']);
		array_push($areaCount, $areaList['count']);
		array_push($areaIconUrl, $areaList['icon_url']);
	}
	include_once('/var/www/HCI-forum/View/areaView.php');

	require_once('/var/www/HCI-forum/View/indexFooter.html');
?>