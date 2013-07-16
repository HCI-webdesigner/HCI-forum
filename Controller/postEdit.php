<?php
	include_once('/var/www/HCI-forum/Model/DataAccess.php');
	$conn = new DataAccess("localhost", "root", "root", "hciForum");
	class postEdit {
		function __construct($title, $content) {
			$current_userName = $_SESSION['usr'];
			$current_boardName = $_GET['board'];
			$current_user_id=mysql_query("SELECT id FROM user WHERE account='$current_userName'");
			$current_board_id=mysql_query("SELECT id FROM board WHERE name='$current_boardName'");
			$sql = "UPDATE `post` SET title='$title',content='$content'";
			mysql_query($sql);
		}
	}
?>