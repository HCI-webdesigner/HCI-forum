<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</html>
<?php
	define("DS",DIRECTORY_SEPARATOR);
	define("ROOT",dirname(dirname(__FILE__)));
	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$verifyPostId = $_GET['id'];
	$sql = "SELECT * FROM `post` WHERE id='$verifyPostId'";
	$query = mysql_query($sql);
	while($rows = mysql_fetch_array($query)) {
?>
	<h1>标题: <?php echo $verifyTitle = $rows['title'];?></h2>
	<h2>内容: <?php echo $verifyContent = $rows['content'];?></h2>
<?php
	}
	if($_POST['sub']) {
		$result = $_POST['verifyresult'];
		if($result) {
			$verify_sql = "UPDATE `post` SET type='3' WHERE id='$verifyPostId'";
		}
		else {
			$verify_sql = "UPDATE `post` SET type='0' WHERE id='$verifyPostId'";
		}
		if(mysql_query($verify_sql)) {
				echo "<script language=javascript>alert('操作成功');location='/HCI-forum/Controller/adminCon.php?action=1'</script>";
		}
	}
?>
<form action="" method="post" name="verify">
	<select name="verifyresult">
		<option value="1">审核通过</option>
		<option value="0">驳回申请</option>
	</select>
	<br>
	<input type="submit" name="sub" value="提交">
</form> 