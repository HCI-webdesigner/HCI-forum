<?php
	define("DS", DIRECTORY_SEPARATOR);
	define("ROOT", dirname(dirname(__FILE__)));

	include_once(ROOT . DS . "Model" . DS . "DataAccess.php");
	$conn = new DataAccess("hciForum");
	$areaId = $_GET['area'];
	$userId = $_GET['id'];
	$userSQL = "SELECT account FROM `user` WHERE id='$userId'";
	$userMsg=mysql_fetch_array(mysql_query($userSQL));
	$userAccount = $userMsg['account'];

	if($_POST['sub']) {
		$userId = $_POST['userId'];
		$newAccount = $_POST['newAccount'];
		$uSQL = "UPDATE `user` SET account='$newAccount' WHERE id='$userId'";
		if(mysql_query($uSQL)) {
			echo "<script language=javascript>alert('修改成功');location='/HCI-forum/View/moderatorIndex.php?area=$areaId'</script>";
		}
	}
?>
<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<form action="" method="post">
	<input type="text" name="newAccount" value="<?php echo $userAccount;?>">
	<input type="hidden" name="userId" value="<?php echo $userId;?>">
	<br><input type="submit" name="sub" value="提交">
</form>
</html>