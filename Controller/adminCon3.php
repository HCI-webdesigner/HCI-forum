<?php
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT",dirname(dirname(__FILE__)));
	$conn = new DataAccess("hciForum");
	$sql = "SELECT * FROM `board`";
	$query = mysql_query($sql);
	$moderatorName = array();
	$board = array();

	while($moderator_rows = mysql_fetch_array($query)) {
		array_push($moderatorName, $moderator_rows['moderator']);
		$sql2 = "SELECT account FROM `area` WHERE id=$moderator_rows[user_id]";
		$area_result = mysql_fetch_array(mysql_query($sql2));
		array_push($board, $area_result[0]);
	}
?>
<form action="" method="post">
	<?php foreach ($moderatorName as $key => $moderatorname) {
?>
	<h1>
<?php
?>
	}  echo $</h1>
</form>