<?php
	include_once('/var/www/HCI-forum/Model/DataAccess.php');
	include_once('/var/www/HCI-forum/Model/board.php');
	$conn = new DataAccess("hciForum");

	$area = $_GET['area'];
	$board = $_GET['board'];
	$sql1 = "SELECT name FROM area WHERE id = ".$area;
	$result1 = mysql_query($sql1);
	$list_arr1 =  mysql_fetch_array($result1);
	$pageTitle = $list_arr1['name']." - HCI技术论坛";
	if($board!=0){
		$sql2 = "SELECT name FROM board WHERE id = ".$board;
		$result2 = mysql_query($sql2);
		$list_arr2 =  mysql_fetch_array($result2);
		$pageTitle = $list_arr2['name']." - ".$pageTitle;
	}
	require_once("/var/www/HCI-forum/View/boardHeader.php");

	$sql="SELECT * FROM `board` WHERE area_id='$area'";
	$query = mysql_query($sql);
	$board_num = mysql_num_rows($query);
	$boardId = array();
	$boardName = array();
	$boardModerator = array();
	for($i=0;$i<$board_num;$i++) {
		$boardList = mysql_fetch_array($query);
		array_push($boardId, $boardList['id']);
		array_push($boardName ,$boardList['name']);
		array_push($boardModerator ,$boardList['moderator']);
	}

	include('/var/www/HCI-forum/View/boardView.php');
	include('/var/www/HCI-forum/View/setting.html');
	include('/var/www/HCI-forum/Controller/postController.php');
	require_once("/var/www/HCI-forum/View/boardFooter.html");
?>