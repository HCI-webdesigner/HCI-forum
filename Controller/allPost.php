<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
</html>
<?php
	
	class AllPost {
		public $allPost = array();
		function __construct($areaId) {
			include_once('/var/www/HCI-forum/Model/DataAccess.php');
			$conn = new DataAccess("localhost", "root", "root", "hciForum");
			$sql = "SELECT post.* FROM post,board WHERE
				post.board_id=board.id AND board.area_id='$areaId'";
			$query = mysql_query($sql);
			//echo $sql."<br>";
			while($allPost=mysql_fetch_array($query)) {
				$temp_user = mysql_fetch_array(mysql_query("SELECT account from user WHERE id='$allPost[user_id]'"));
				echo $allPost['type'];
				echo "<a href="."/HCI-forum/View/postView.php?id=$allPost[id]>".$allPost['title']."</a>";
				echo "author :".$temp_user[0]."--"."post date: ".$allPost['post_date']."<br>";
			}
		}
	}
?>