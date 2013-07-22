<?php
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT",dirname(dirname(__FILE__)));

	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$areaId = $_GET['id'];
	$deleteSQL = "UPDATE `area` SET deleted='1' WHERE id='$areaId'";
	if(mysql_query($deleteSQL)) {
		echo "<script language=javascript>alert('删除成功');location='adminCon.php?action=2'</script>";
	}
	else {
		echo "error";
		echo $deleteSQL;
	}
?>
<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>