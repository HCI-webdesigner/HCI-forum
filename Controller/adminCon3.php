<?php
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT",dirname(dirname(__FILE__)));
	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$sql = "SELECT * FROM `board`";
	$query = mysql_query($sql);
	$moderatorName = array();
	$board = array();

	while($moderator_rows = mysql_fetch_array($query)) {
		array_push($moderatorName, $moderator_rows['moderator']);
		$sql2 = "SELECT name FROM `area` WHERE id='$moderator_rows[area_id]'";
		$area_result = mysql_fetch_array(mysql_query($sql2));
		array_push($board, $area_result[0]);
	}
?>
<form action="" method="post">
<?php 
	foreach ($moderatorName as $key => $moderatorname) {
?>
	<h1><?php echo $moderatorname;?></h1>
	<h2><?php echo $board[$key];?></h2>
<?php
	}
?>
	
</form>