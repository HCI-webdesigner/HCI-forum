<?php
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT",dirname(dirname(__FILE__)));
	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	include_once(ROOT . DS . "Model" . DS . "board.php");
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
	include_once(ROOT . DS. "View" . DS. "boardHeader.php");

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
	include_once(ROOT . DS. "View" . DS . "boardView.php");
	include_once(ROOT . DS. "View" . DS. "setting.html");
	include_once(ROOT . DS . "Controller" . DS . "postCon.php");
	include_once(ROOT . DS . "View" . DS . "boardFooter.html");
?>