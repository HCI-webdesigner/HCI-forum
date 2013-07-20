<?php
	
	require_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$conn = new DataAccess("hciForum");

	$pusr = array();
	$ptitle = array();
	$ptype = array();
	$pdate = array();
	$pid = array();
	$aid = $areaId[$key];

	$sql = "SELECT post.* FROM post,board WHERE
				post.board_id=board.id AND board.area_id='$aid' order by id desc limit 0,5";
	$query = mysql_query($sql);
	while($apost=mysql_fetch_array($query)) {
		array_push($ptitle, $apost['title']);
		array_push($ptype, $apost['type']);
		array_push($pdate, $apost['post_date']);	
		array_push($pid, $apost['id']);
		$tusr = mysql_fetch_array(mysql_query("SELECT account from user WHERE id='$apost[user_id]'"));
		array_push($pusr, $tusr[0]);
	}
	include_once('/var/www/HCI-forum/View/topPostView.php');

?>