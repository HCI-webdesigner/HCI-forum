<?php
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT",dirname(dirname(__FILE__)));
	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");

	$conn = new DataAccess("hciForum");
	$sql = "SELECT * FROM `post` WHERE type='4'";
	$query = mysql_query($sql);
	$verifyId = array();
	$verifyTitle = array();
	$verifyUser = array();
	while($rows=mysql_fetch_array($query)) {
		array_push($verifyId, $rows['id']);
		array_push($verifyTitle, $rows['title']);
		$tmp_user = mysql_fetch_array(mysql_query("SELECT account FROM `user` WHERE id='$rows[user_id]'"));
		array_push($verifyUser, $tmp_user[0]);
	}
	include_once(ROOT . DS . "View" . DS . "verifyView.php");
?>
<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>