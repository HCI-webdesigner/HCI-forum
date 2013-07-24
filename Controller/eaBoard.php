<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<script type="text/javascript" src='/HCI-forum/javascripts/delBoard.js'></script>
</html>
<?php
	define("DS", DIRECTORY_SEPARATOR);
	define("ROOT", dirname(dirname(__FILE__)));

	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$areaId = $_GET['area'];
	$sql = "SELECT * FROM `board` WHERE area_id='$areaId'";
	$query = mysql_query($sql);
	$boardName = array();
	$boardId = array();
	while($board_rows=mysql_fetch_array($query)) {
		array_push($boardName, $board_rows['name']);
		array_push($boardId, $board_rows['id']);
	}
	if($_POST['sub']) {
		$areaId = $_POST['area'];
		$addSql = "INSERT INTO `board` (id, name, area_id) values
		('', '$_POST[name]', '$areaId')";
		if(mysql_query($addSql)) {
			echo "<script language=javascript>alert('添加成功');location='eaBoard.php?area=$areaId'</script>";
		}
	}
	foreach ($boardName as $key => $boardname) {
?>
	<div class="area">
		<?php echo $boardname;?><a href="#" onclick="delBoard(<?php echo $boardId[$key];?>)">删除</a>
		<a href="/HCI-forum/Controller/editBoard.php?board=<?php echo $boardId[$key];?>">编辑</a><br>
	</div>
<?php
	}
?>
<form action="" method="post" name="addBoard">
	<input type="text" name="name" size=15><br>
	<input type="hidden" name="area" value="<?php echo $areaId;?>">
	<input type="submit" name="sub" value="添加">
</form>