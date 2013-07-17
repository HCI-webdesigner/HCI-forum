<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
</html>
<?php
	include_once('/var/www/HCI-forum/Model/DataAccess.php');
	$conn = new DataAccess("localhost","root", "root","hciForum");
	$postId = $_GET['id'];
	$sql = "SELECT * FROM post WHERE id='$postId'";
	$query=mysql_query($sql);
	while($post_Row=mysql_fetch_array($query)) {
		$post_Author = mysql_fetch_array(mysql_query("SELECT account FROM user WHERE id='$post_Row[user_id]'"));
		echo "Author :".$post_Author[0]."<br>";
		echo "Title :".$post_Row['title']."<br>";
		echo $post_Row['content']."<br>";
		echo $post_Row['post_date'];
		echo "<br>";
	}
?>