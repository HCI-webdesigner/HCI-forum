<?php
	define("DS", DIRECTORY_SEPARATOR);
	define("ROOT",dirname(dirname(__FILE__)));
	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");

	$conn = new DataAccess("hciForum");
	$postId = $_GET['id'];
	$sql = "SELECT * FROM `post` WHERE id='$postId'";
	$query = mysql_query($sql);
	$postMsg = mysql_fetch_array($query);
	$userId = $postMsg['user_id'];
	$userSql = "SELECT account FROM user WHERE id='$userId'";
	$postTitle = $postMsg['title'];
	$postContent = $postMsg['content'];
	$postPoint = $postMsg['point'];
	$userResult = mysql_fetch_array(mysql_query($userSql));
	$postUser = $userResult[0];

	if($_POST['sub']) {
		$id = $_POST['id'];
		$newTitle = $_POST['newTitle'];
		$newContent = $_POST['newContent'];
		$sql2 = "UPDATE `post` SET title = '$newTitle', content='$newContent' WHERE id='$id'";
		if(mysql_query($sql2)) {
			echo "<script language=javascript>alert('操作成功');location='adminPostCon.php?area=1&board=0'</script>";
		}
		else {
			echo $sql2;
		}
	}
?>
<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>
<form action="" method="post" name="editPost">
	用户 : <?php echo $postUser;?><br>
	标题 : <input type="text" name="newTitle" value="<?php echo $postTitle;?>" size="20"><br>
	分数 : <?php echo $postPoint;?><br>
	内容 : <textarea name="newContent" rows=20 cols="50"><?php echo $postContent;?></textarea><br>
	<input type="hidden" name="id" value="<?php echo $postId;?>">
	<input type="submit" name="sub" value="提交">
</form>