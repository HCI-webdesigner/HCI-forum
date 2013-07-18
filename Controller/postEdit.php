<?php
	include_once('/var/www/HCI-forum/Model/DataAccess.php');
	$conn = new DataAccess("hciForum");
	class postEdit {
		function __construct($title, $content) {
			$current_userName = $_SESSION['usr'];
			$current_boardName = $_GET['board'];
			$current_auth = $_SESSION['auth'];
			$current_user_id=mysql_query("SELECT id FROM user WHERE account='$current_userName'");
			$current_board_id=mysql_query("SELECT id FROM board WHERE name='$current_boardName'");
			$sql = "UPDATE `post` SET title='$title',content='$content'";
			if(mysql_query($sql)) {
				
			}
		}
	}
?>