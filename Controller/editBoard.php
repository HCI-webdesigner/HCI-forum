<?php
	define("DS", DIRECTORY_SEPARATOR);
	define("ROOT", dirname(dirname(__FILE__)));

	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$bId = $_GET['board'];
	$sql = "SELECT * FROM `board` WHERE id='$bId'";
	$query = mysql_query($sql);
	while($board_rows = mysql_fetch_array($query)) {
		$boardName=$board_rows['name'];
		$areaId = $board_rows['area_id'];
	}

	if($_POST['sub']) {
		$newName = $_POST['newName'];
		$area=$_POST['areaId'];
		$sql2 = "UPDATE `board` SET name='$newName' WHERE id='$_POST[boardId]'";
		if(mysql_query($sql2)) {
			echo "<script language=javascript>alert('修改成功');location='eaBoard.php?area=$area'</script>";
		}
	}
?>
<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<form action="" method="post" name="editBoard">
	<input type="text" name="newName" value="<?php echo $boardName;?>" size="20">
	<input type="hidden" name="boardId" value="<?php echo $bId;?>">
	<input type="hidden" name="areaId" value="<?php echo $areaId;?>">
	<br><input type="submit" name="sub" value="提交">
</form>
</html>