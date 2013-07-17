<?php
	session_start();
	class AllPost {
		public $allPost = array();
		function __construct($areaId, $boardId) {
			include_once('/var/www/HCI-forum/Model/DataAccess.php');
			$conn = new DataAccess("localhost", "root", "root", "hciForum");
			if($boardId == 0) {
				$sql = "SELECT post.* FROM post,board WHERE
					post.board_id=board.id AND board.area_id='$areaId'";
				$query = mysql_query($sql);
				while($allPost=mysql_fetch_array($query)) {
					$temp_user = mysql_fetch_array(mysql_query("SELECT account from user WHERE id='$allPost[user_id]'"));
					echo $allPost['type'];
					echo "<a href="."/HCI-forum/View/postView.php?id=$allPost[id]>".$allPost['title']."</a>";
					echo "author :".$temp_user[0]."--"."post date: ".$allPost['post_date']."<br>";
				}
			}
			else {
				$sql = "SELECT post.* FROM post WHERE post.board_id='$boardId'";
				$query = mysql_query($sql);
				while($post_row=mysql_fetch_array($query)) {
					$temp_user=mysql_fetch_array(mysql_query("SELECT account FROM `user` WHERE id='$post_row[user_id]'"));
					echo $post_row['type'];
					echo "<a href="."/HCI-forum/View/postView.php?id=$post_row[id]>".$post_row['title']."</a>";
					echo "author :".$temp_user[0]."--"."post date: ".$post_row['post_date']."<br>";
				}
			}
		}
	}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
</html>