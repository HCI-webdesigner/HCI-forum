<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>
<?php
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT",dirname(dirname(__FILE__)));
	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");

	$conn = new DataAccess("hciForum");
	$type=$_GET['type'];
	$id = $_GET['id'];
	$action = $_GET['action'];
	switch ($type) {
		case '1':
			postCon($id, $action);
			break;
		case '2':
			commentCon($id, $action);
			break;
		default:
			break;
	}

	function postCon($id, $action) {
		switch ($action) {
			case '1':
				deletePost($id);
				break;
			case '2':
				cancleInformPost($id);
			default:
				break;
		}
	}

	function commentCon($id, $action) {
		switch ($action) {
			case '1':
				deleteComment($id);
				break;
			case '2':
				cancleInformComment($id);
			default:
				break;
		}
	}

	function deletePost($id) {
		$delPostSQL = "UPDATE `post` SET deleted=1 WHERE id='$id'";
		$delFBsql = "DELETE FROM `feedback` WHERE post_id='$id'";
		if(mysql_query($delPostSQL) && mysql_query($delFBsql)) {
			echo "<script language=javascript>alert('操作成功');
			location='/HCI-forum/Controller/adminCon.php?action=1';</script>";
		}
	}

	function cancleInformPost($id) {
		$canPostSQL = "DELETE FROM `feedback` WHERE post_id='$id'";
		if(mysql_query($canPostSQL)) {
			echo "<script language=javascript>alert('操作成功');
			location='/HCI-forum/Controller/adminCon.php?action=1';</script>";
		}
	}

	function deleteComment($id) {
		$delCommentSQL = "UPDATE `comment` SET deleted='1' WHERE id='$id'";
		$delFbSQL = "DELETE FROM `feedback` WHERE comment_id='$id'";
		if(mysql_query($delCommentSQL) && mysql_query($delFbSQL)) {
			echo "<script language=javascript>alert('操作成功');
			location='/HCI-forum/Controller/adminCon.php?action=1';</script>";
		}
		else
			echo $delCommentSQL;
	}

	function cancleInformComment($id) {
		$canCommentSQL = "DELETE FROM `feedback` WHERE comment_id='$id'";
		if(mysql_query($canCommentSQL)) {
			echo "<script language=javascript>alert('操作成功');
			location='/HCI-forum/Controller/adminCon.php?action=1';</script>";
		}
		else
			echo $delCommentSQL;
	}
?>