<?php
	include_once('/var/www/HCI-forum/Model/DataAccess.php');
	include_once('/var/www/HCI-forum/Model/area.php');
	$conn = new DataAccess("hciForum");

	$sql="SELECT * FROM `area`";
	$query=mysql_query($sql);
	$result_num = mysql_num_rows($query);
	for($i=0;$i<$result_num;$i++) {
		$areaList = mysql_fetch_array($query);
		$area = new Area($areaList['name'], $areaList['count'], $areaList['img_url']);
		include('/var/www/HCI-forum/View/areaView.php');
	}
?>