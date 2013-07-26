<?php
	session_start();
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT",dirname(dirname(__FILE__)));
	include_once(ROOT . DS . "Model" . DS. "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$side = $_GET['side'];
	
	switch ($side) {
		case '1':
		sideOne($_GET['usr']);
			break;
		case '2':
		sideTwo($_GET['usr']);
            break;
		default:
			break;
	}

	function sideOne($usr) {
		$postId = $_GET['post'];
		$sideSQL = "INSERT INTO debate (id, side, post_id, user_id)
		values('','1','$postId','$_SESSION[id]')";
		if(mysql_query($sideSQL)) {
			$_SESSION['side'] = 1;
			echo "<script language=javascript>alert('选择成功');
				location='/HCI-forum/Controller/onePostCon.php?postId=$postId'</script>";
		}
	}

	function sideTwo($usr) {
		$postId = $_GET['post'];
		$sideSQL = "INSERT INTO debate (id, side, post_id, user_id)
		values('','2','$postId','$_SESSION[id]')";
		if(mysql_query($sideSQL)) {
			$_SESSION['side'] = 2;
			echo "<script language=javascript>alert('选择成功');
				location='/HCI-forum/Controller/onePostCon.php?postId=$postId'</script>";
		}
	}
?>
<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>