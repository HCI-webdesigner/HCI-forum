<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>
<?php
	define("DS", DIRECTORY_SEPARATOR);
	define("ROOT", dirname(dirname(__FILE__)));
	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$postId = $_GET['id'];
	$areaId = $_GET['area'];
	$conn = new DataAccess("hciForum");
	$areaSQL = "SELECT board_id FROM `post` WHERE id='$postId'";
	$boardArray = mysql_fetch_array(mysql_query($areaSQL));
	$boardId = $boardArray['0'];
	$boardSQL = "SELECT * FROM `board` WHERE area_id='$areaId'";
	$allBoardName = array();
	$allBoardId = array();
	$query = mysql_query($boardSQL);
	while($result=mysql_fetch_array($query)) {
		array_push($allBoardName, $result['name']);
		array_push($allBoardId, $result['id']);
	}
?>
<form action="movePost.php?id=<?php echo $postId;?>&area=<?php echo $areaId;?>" method="post">
	<select name="board">
<?php
	foreach ($allBoardName as $key => $allboardname) {
		if($allBoardId[$key] != $boardId) {
?>
		<option value='<?php echo $allBoardId[$key];?>'><?php echo $allboardname;?></option>
<?php
		}
	}
?>
	</select><br>
	<input type="submit" name="sub" value="移至此">
	</form>
<?php
	if($_POST['sub']) {
		$areaId = $_GET['area'];
		$id = $_GET['id'];
		$board = $_POST['board'];
		$moveSQL = "UPDATE `post` SET board_id='$board' WHERE id='$id'";
		echo $moveSQL;
		if(mysql_query($moveSQL)) {
			echo "<script language=javascript>alert('移动成功');location='/HCI-forum/Controller/mpCon.php?area=1&action=0'</script>";
		}
	}
?>