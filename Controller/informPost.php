<?php
	session_start();
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT",dirname(dirname(__FILE__)));
	include_once(ROOT . DS . "Model" . DS. "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$postId = $_GET['id'];
	$fbDate = date('Y-m-d H:i:s');
	if($_POST['sub']) {
		$postId = $_POST['postId'];
		$informSql = "INSERT INTO `feedback` (id,content,fb_date,post_id,comment_id,user_id) values
		('','$_POST[content]','$fbDate','$postId','0','$_SESSION[id]')";
		if(mysql_query($informSql)) {
			echo "<script language=javascript>alert('举报成功，举报结果会在24小时内反馈');
			location='/HCI-forum/Controller/onePostCon.php?postId=$postId';</script>";
		}
		else {
			echo $informSql;
		}
	}

?>
<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<head>
		<script type="text/javascript">
			function checkNonNull() {
				if(document.getElementById("content").value.length == 0) {
					alert('请输入内容');
					return false;
				}
				else
					return true;
			}
		</script>
	</head>
<body>
	<form action="" method="post" name="informPost" onsubmit="return checkNonNull()">
		举报原因 : <br>
		<textarea name="content" rols=20 rows=10 id="content"></textarea><br>
		<input type="hidden" name="postId" value="<?php echo $postId;?>">
		<input type="submit" name="sub" value="确定">
	</form>
</body>
</html>