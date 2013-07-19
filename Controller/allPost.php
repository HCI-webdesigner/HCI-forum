<?php
	include_once('/var/www/HCI-forum/Model/DataAccess.php');
	$conn = new DataAccess("hciForum");
	$allPost = array();
	$areaId = $_GET['area'];
	$boardId = $_GET['board'];
		if($boardId == 0) {
			$sql = "SELECT post.* FROM post,board WHERE
					post.board_id=board.id AND board.area_id='$areaId' order by id desc";
			$query = mysql_query($sql);
			while($allPost=mysql_fetch_array($query)) {
				$temp_user = mysql_fetch_array(mysql_query("SELECT account from user WHERE id='$allPost[user_id]'"));
				
			}
		}
?>