<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>
<?php
	define("DS", DIRECTORY_SEPARATOR);
	define("ROOT", dirname(dirname(__FILE__)));

	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$areaId = $_GET['area'];
	$sql = "SELECT post.* FROM post,board WHERE
		post.authority='0' AND post.state='0' AND post.board_id=board.id AND post.deleted='0' AND board.area_id='$areaId'";
	$query = mysql_query($sql);
	$postId = array();
	$postTitle = array();
	$postType = array();
	while($normal_rows=mysql_fetch_array($query)) {
		array_push($postId, $normal_rows['id']);
		array_push($postTitle, $normal_rows['title']);
		array_push($postType, $normal_rows['type']);
	}
	foreach ($postTitle as $key => $posttitle) {
?>
	<a href="/HCI-forum/View/mopView.php?id=<?php echo $postId[$key];?>"><?php echo $posttitle;?></a>
	&nbsp;&nbsp;&nbsp;<a href="mpCon.php?id=<?php echo $postId[$key];?>&action=1&area=<?php echo $areaId;?>">置顶</a>
	<?php
		if($postType[$key] == 0) {
	?>
		<a href="mpCon.php?id=<?php echo $postId[$key];?>&action=2&area=<?php echo $areaId;?>">精华</a>
	<?php
		}
		else {
	?>
		<a href="mpCon.php?id=<?php echo $postId[$key];?>&action=3&area=<?php echo $areaId;?>">取消精华</a>
	<?php
		}
	?>
	<a href="mpCon.php?id=<?php echo $postId[$key];?>&action=4&area=<?php echo $areaId;?>">锁定</a>
	<a href="mpCon.php?id=<?php echo $postId[$key];?>&action=5&area=<?php echo $areaId;?>">删除帖子</a>	
	<a href="mpCon.php?id=<?php echo $postId[$key];?>&action=6&area=<?php echo $areaId;?>">移动帖子</a><br>
<?php
	}
	$action=$_GET['action'];
	$areaId = $_GET['area'];
	switch ($action) {
		case '1':
			$postId = $_GET['id'];
			if(makeToTop($postId)) {
				echo "<script language=javascript>alert('置顶成功');location='/HCI-forum/Controller/mpCon.php?area=$areaId&action=0';</script>";
			}
			break;
		case '2':
			$postId = $_GET['id'];
			if(makeToEssence($postId)) {
				echo "<script language=javascript>alert('操作成功');location='/HCI-forum/Controller/mpCon.php?area=$areaId&action=0';</script>";
			}
			break;
		case '3':
			$postId = $_GET['id'];
			if(makeToNomal($postId)) {
				echo "<script language=javascript>alert('操作成功');location='/HCI-forum/Controller/mpCon.php?area=$areaId&action=0';</script>";
			}
			break;
		case '4':
			$postId = $_GET['id'];
			if(lockPost($postId)) {
				echo "<script language=javascript>alert('操作成功');location='/HCI-forum/Controller/mpCon.php?area=$areaId&action=0';</script>";
			}
			break;
		case '5':
			$postId = $_GET['id'];
			if(delPost($postId)) {
				echo "<script language=javascript>alert('删除成功');location='/HCI-forum/Controller/mpCon.php?area=$areaId&action=0';</script>";
			}
			break;
		default:
			break;
	}

	function makeToTop($postId) {
		$topSQL = "UPDATE `post` SET authority='1' WHERE id='$postId'";
		if(mysql_query($topSQL)) {
			return true;
		}
		else {
			return false;
		}
	}

	function makeToEssence($postId) {
		$essenceSQL = "UPDATE `post` SET type='3' WHERE id='$postId'";
		if(mysql_query($essenceSQL)) {
			return true;
		}
		else {
			return false;
		}
	}

	function makeToNomal($postId) {
		$essenceSQL = "UPDATE `post` SET type='0' WHERE id='$postId'";
		if(mysql_query($essenceSQL)) {
			return true;
		}
		else {
			return false;
		}
	}

	function lockPost($postId) {
		$lockSQL = "UPDATE `post` SET state='1' WHERE id='$postId'";
		if(mysql_query($lockSQL)) {
			return true;
		}
		else {
			return false;
		}
	}

	function delPost($postId) {
		$delSQL = "UPDATE `post` SET deleted='1' WHERE id='$postId'";
		if(mysql_query($delSQL)) {
			return true;
		}
		else {
			return false;
		}
	}
?>