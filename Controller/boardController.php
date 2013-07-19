<?php
	include_once('/var/www/HCI-forum/Model/DataAccess.php');
	include_once('/var/www/HCI-forum/Model/board.php');
	$conn = new DataAccess("hciForum");
	$areaId = $_GET['id'];
	$sql="SELECT * FROM `board` WHERE area_id='$areaId'";
	$query = mysql_query($sql);
	$board_num = mysql_num_rows($query);
	for($i=0;$i<$board_num;$i++) {
		$boardList = mysql_fetch_array($query);
		$board=new Board($boardList['name'], $boardList['moderator']);
		include('/var/www/HCI-forum/View/boardView.php');
	}
?>