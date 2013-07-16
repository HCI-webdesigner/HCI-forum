<html>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</html>
<?php
	include_once('/var/www/HCI-forum/Model/DataAccess.php');
	class PostView {
		function __construct() {
			$conn = new DataAccess("localhost", "root", "root", "hciForum");
			$sql = "SELECT * FROM `post`";
			$query = mysql_query($sql);
			while($post_row=mysql_fetch_array($query)) {
				$temp_user=mysql_fetch_array(mysql_query("SELECT account FROM `user` WHERE id='$post_row[user_id]'"));
				echo "[".$post_row["type"]."]"."--".$post_row["title"];
				echo "--"."poster:"."$temp_user[0]"."--"."post date"."--"."$post_row[post_date]"."<br>";
			}
		}
	}
?>